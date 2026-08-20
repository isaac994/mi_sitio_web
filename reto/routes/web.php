<?php

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/panel', function () {
    return view('panel');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', function () {
    request()->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required',
    ], [
        'nombre.required' => 'Escribí tu nombre.',
        'email.required' => 'Escribí tu correo.',
        'email.email' => 'El correo no es válido.',
        'mensaje.required' => 'Escribí tu mensaje.',
    ]);

    return back()->with('enviado', 'Gracias por tu mensaje, te vamos a contactar pronto.');
});

Route::get('/productos', function () {
    $productos = Producto::all();
    return view('productos', ['productos' => $productos]);
});

Route::get('/productos/nuevo', function () {
    return view('productos-nuevo');
})->middleware('auth');

Route::post('/productos/nuevo', function () {
    request()->validate([
    'nombre' => 'required',
    'marca' => 'required',
    'precio' => 'required|integer',
    'stock' => 'required|integer|min:0',
], [
    'nombre.required' => 'Escribí el nombre del celular.',
    'marca.required' => 'Escribí la marca del celular.',
    'precio.required' => 'Escribí el precio del celular.',
    'precio.integer' => 'El precio se anota solo con cifras.',
    'stock.required' => 'Escribí el stock disponible.',
    'stock.integer' => 'El stock debe ser un número entero.',
    'stock.min' => 'El stock no puede ser menor que cero.',
]);

    Producto::create([
        'nombre' => request()->input('nombre'),
        'marca' => request()->input('marca'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

return redirect('/productos');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        request()->session()->regenerate();
        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/panel', function () {
    $productos = Producto::all();
    return view('panel', ['productos' => $productos]);
})->middleware('auth');
