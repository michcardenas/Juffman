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
        return view('admin.paginas.editar-es', compact('global'));
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

        // Procesar Logo - MÉTODO ESPECÍFICO PARA TU HOSTING
        if ($request->hasFile('logo')) {
            \Log::info('🔍 Procesando logo upload...');
            
            // Eliminar logo anterior si existe
            if ($global->logo) {
                $oldLogoPath = base_path('public_html/storage/' . $global->logo);
                if (file_exists($oldLogoPath)) {
                    unlink($oldLogoPath);
                    \Log::info('✅ Logo anterior eliminado: ' . $oldLogoPath);
                }
            }
            
            $file = $request->file('logo');
            $filename = time() . "_logo." . $file->getClientOriginalExtension();
            
            // IMPORTANTE: Usar base_path con public_html para tu hosting
            $destinationPath = base_path('public_html/storage/global/logos');
            
            // Crear directorio si no existe
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
                \Log::info('📁 Directorio creado: ' . $destinationPath);
            }
            
            // Mover archivo
            if ($file->move($destinationPath, $filename)) {
                $data['logo'] = 'global/logos/' . $filename;
                
                // Dar permisos correctos
                chmod($destinationPath . '/' . $filename, 0644);
                
                \Log::info('✅ Logo guardado exitosamente en: ' . $destinationPath . '/' . $filename);
                \Log::info('📝 Valor para BD: ' . $data['logo']);
            } else {
                \Log::error('❌ Error al mover archivo de logo');
                throw new \Exception('Error al mover archivo de logo');
            }
        }

        // Procesar Favicon - MÉTODO ESPECÍFICO PARA TU HOSTING
        if ($request->hasFile('favicon')) {
            \Log::info('🔍 Procesando favicon upload...');
            
            // Eliminar favicon anterior si existe
            if ($global->favicon) {
                $oldFaviconPath = base_path('public_html/storage/' . $global->favicon);
                if (file_exists($oldFaviconPath)) {
                    unlink($oldFaviconPath);
                    \Log::info('✅ Favicon anterior eliminado: ' . $oldFaviconPath);
                }
            }
            
            $file = $request->file('favicon');
            $filename = time() . "_favicon." . $file->getClientOriginalExtension();
            
            // IMPORTANTE: Usar base_path con public_html para tu hosting
            $destinationPath = base_path('public_html/storage/global/favicons');
            
            // Crear directorio si no existe
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
                \Log::info('📁 Directorio creado: ' . $destinationPath);
            }
            
            // Mover archivo
            if ($file->move($destinationPath, $filename)) {
                $data['favicon'] = 'global/favicons/' . $filename;
                
                // Dar permisos correctos
                chmod($destinationPath . '/' . $filename, 0644);
                
                \Log::info('✅ Favicon guardado exitosamente en: ' . $destinationPath . '/' . $filename);
                \Log::info('📝 Valor para BD: ' . $data['favicon']);
            } else {
                \Log::error('❌ Error al mover archivo de favicon');
                throw new \Exception('Error al mover archivo de favicon');
            }
        }

        // Debug: Ver qué datos se van a guardar
        \Log::info('📊 Datos a guardar en global_settings:', $data);

        // Agregar timestamp
        $data['updated_at'] = now();

        // Guardar en base de datos
        if ($global->exists) {
            $global->update($data);
            $message = 'Configuración global actualizada exitosamente.';
            \Log::info('✅ Configuración actualizada para ID: ' . $global->id);
        } else {
            $data['created_at'] = now();
            $newGlobal = GlobalSetting::create($data);
            $message = 'Configuración global creada exitosamente.';
            \Log::info('✅ Nueva configuración creada con ID: ' . $newGlobal->id);
        }

        // Redireccionar al método index para mostrar los datos actualizados
        return redirect()->route('global.index')->with('success', $message);

    } catch (\Exception $e) {
        \Log::error('❌ Error en GlobalController@update: ' . $e->getMessage());
        \Log::error('📍 Stack trace: ' . $e->getTraceAsString());
        return redirect()->back()->with('error', 'Error al guardar: ' . $e->getMessage());
    }
}
}