<?php

namespace App\Http\Controllers;

use App\Models\GlobalSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GlobalController extends Controller
{
    /**
     * Mostrar el formulario de configuración global
     */
    public function index()
    {
        $global = GlobalSetting::getSettings();
        
        // Cambiar a tu vista real - ajusta el nombre según tu estructura
        return view('admin.editar-es', compact('global'));
    }

    /**
     * Actualizar la configuración global
     */
    public function update(Request $request)
    {
        try {
            // Limpiar sesión para evitar problemas
            session()->forget('_old_input');

            // Obtener configuración actual
            $global = GlobalSetting::getSettings();
            
            // Preparar datos
            $data = [];
            
            // Procesar campos de texto
            if ($request->has('site_name')) {
                $data['site_name'] = $request->input('site_name');
            }
            if ($request->has('site_slogan')) {
                $data['site_slogan'] = $request->input('site_slogan');
            }
            if ($request->has('link_facebook')) {
                $data['link_facebook'] = $request->input('link_facebook');
            }
            if ($request->has('link_instagram')) {
                $data['link_instagram'] = $request->input('link_instagram');
            }
            if ($request->has('link_pinterest')) {
                $data['link_pinterest'] = $request->input('link_pinterest');
            }
            if ($request->has('meta_title')) {
                $data['meta_title'] = $request->input('meta_title');
            }
            if ($request->has('meta_description')) {
                $data['meta_description'] = $request->input('meta_description');
            }
            if ($request->has('meta_keywords')) {
                $data['meta_keywords'] = $request->input('meta_keywords');
            }
            if ($request->has('meta_author')) {
                $data['meta_author'] = $request->input('meta_author');
            }
            if ($request->has('meta_robots')) {
                $data['meta_robots'] = $request->input('meta_robots');
            }
            if ($request->has('canonical_url')) {
                $data['canonical_url'] = $request->input('canonical_url');
            }
            if ($request->has('google_analytics')) {
                $data['google_analytics'] = $request->input('google_analytics');
            }

            // Procesar Logo
            if ($request->hasFile('logo')) {
                // Eliminar logo anterior si existe
                if ($global->logo && Storage::disk('public')->exists($global->logo)) {
                    Storage::disk('public')->delete($global->logo);
                }
                
                $file = $request->file('logo');
                $filename = time() . "_logo." . $file->getClientOriginalExtension();
                $path = $file->storeAs('global/logos', $filename, 'public');
                $data['logo'] = $path;
            }

            // Procesar Favicon
            if ($request->hasFile('favicon')) {
                // Eliminar favicon anterior si existe
                if ($global->favicon && Storage::disk('public')->exists($global->favicon)) {
                    Storage::disk('public')->delete($global->favicon);
                }
                
                $file = $request->file('favicon');
                $filename = time() . "_favicon." . $file->getClientOriginalExtension();
                $path = $file->storeAs('global/favicons', $filename, 'public');
                $data['favicon'] = $path;
            }

            // Debug: Ver qué datos se van a guardar
            \Log::info('Datos a guardar en global_settings:', $data);

            // Agregar timestamp
            $data['updated_at'] = now();

            // Guardar en base de datos
            if ($global->exists) {
                $global->update($data);
                $message = 'Configuración global actualizada exitosamente.';
                \Log::info('Configuración actualizada para ID: ' . $global->id);
            } else {
                $data['created_at'] = now();
                $newGlobal = GlobalSetting::create($data);
                $message = 'Configuración global creada exitosamente.';
                \Log::info('Nueva configuración creada con ID: ' . $newGlobal->id);
            }

            // Redireccionar al método index para mostrar los datos actualizados
            return redirect()->route('global.index')->with('success', $message);

        } catch (\Exception $e) {
            \Log::error('Error en GlobalController@update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al guardar: ' . $e->getMessage());
        }
    }
}