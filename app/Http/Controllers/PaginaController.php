<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pqrs;
use App\Models\Producto;
use App\Models\Pedido;

class PaginaController extends Controller
{
    // ─── Páginas estáticas ───────────────────────────────────────────────────

    public function inicio()
    {
        return view('inicio');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    // ─── Menú ────────────────────────────────────────────────────────────────

    public function menu()
    {
        $productos = Producto::all();

        $miPedido = session()->get('pedido', []);

        $totalPedido = array_sum(array_column($miPedido, 'precio'));

        return view('menu', compact('productos', 'miPedido', 'totalPedido'));
    }

    // ─── Pedido: agregar producto ─────────────────────────────────────────────

    public function agregarPedido($id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            session()->push('pedido', [
                'id'     => $producto->id,
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
            ]);
        }

        return redirect()->route('menu');
    }

    // ─── Pedido: limpiar sesión ───────────────────────────────────────────────

    public function limpiarPedido()
    {
        session()->forget('pedido');

        return redirect()->route('menu');
    }

    // ─── Pedido: mostrar confirmación ─────────────────────────────────────────

    public function confirmarPedido()
    {
        $miPedido = session()->get('pedido', []);

        if (empty($miPedido)) {
            return redirect()->route('menu');
        }

        $totalPedido = array_sum(array_column($miPedido, 'precio'));

        return view('confirmar-pedido', compact('miPedido', 'totalPedido'));
        
    }

    // ─── Pedido: guardar en BD ────────────────────────────────────────────────

    public function guardarPedido(Request $request)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:100',
        ]);

        $miPedido = session()->get('pedido', []);

        if (empty($miPedido)) {
            return redirect()->route('menu');
        }

        $total = array_sum(array_column($miPedido, 'precio'));

        Pedido::create([
            'nombre_cliente' => $request->input('nombre_cliente'),
            'productos'      => $miPedido,
            'total'          => $total,
        ]);

        session()->forget('pedido');

        return redirect()->route('menu')->with('success', '¡Pedido realizado con éxito! Gracias, ' . $request->input('nombre_cliente') . ' ☕');
    }

    // ─── Dashboard ────────────────────────────────────────────────────────────

// ─── Dashboard ────────────────────────────────────────────────────────────

    public function inicioDashboard()
    {
        $totalMensajes       = Pqrs::count();
        $mensajesPendientes  = 0;
        $mensajesRespondidos = 0;

        try {
            $mensajesPendientes  = Pqrs::where('estado', 'pendiente')->count();
            $mensajesRespondidos = Pqrs::where('estado', 'respondido')->count();
        } catch (\Exception $e) {
            // Evita el error 500 si la columna estado aún no existe en producción
        }

        return view('dashboard', compact('totalMensajes', 'mensajesPendientes', 'mensajesRespondidos'));
    }
}