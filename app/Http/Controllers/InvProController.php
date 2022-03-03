<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvPro;

class InvProController extends Controller
{
    //
    //Talvez sirva
    /* public function relacion()
    {
        $html = '<center><h1 style=>Hola mundo</h1></center>';
        $html = htmlentities($html);
        $html =$html_entity_decode($html);
        echo $html;
    } */

    public function bBlog()
    {
        $pblog = InvPro::all();
        return response()->json(['status'=> 'Vista', 'VistaBlog' => $pblog]);
        
    }
    

    public function verBlog()
    {
        //Publicacion en orden
        $pblog= InvPro::all();
        $arregloblog=[];
        foreach($pblog as $publicblog)
        { 
            $arregloblog[]=         
            [
                'id'=>$publicblog['id'],
                'Titulo'=>$publicblog['Titulo'],
                'Descripcion'=>$publicblog['Descripcion'],
                'Parrafo1'=>$publicblog['Parrafo1'],
                'Parrafo2'=>$publicblog['Parrafo2'],
                'Parrafo3'=>$publicblog['Parrafo3'],
                'Parrafo4'=>$publicblog['Parrafo4'],
                'Parrafo5'=>$publicblog['Parrafo5'],
                'Parrafo6'=>$publicblog['Parrafo6'],
                'Parrafo7'=>$publicblog['Parrafo7'],
                'Parrafo8'=>$publicblog['Parrafo8'],
                'Parrafo9'=>$publicblog['Parrafo9'],
                'Parrafo10'=>$publicblog['Parrafo10'],
                'Parrafo11'=>$publicblog['Parrafo11'],
                'Parrafo12'=>$publicblog['Parrafo12'],
                'Parrafo13'=>$publicblog['Parrafo13'],
                'Parrafo14'=>$publicblog['Parrafo14'],
                'Parrafo15'=>$publicblog['Parrafo15'],
                'Parrafo16'=>$publicblog['Parrafo16'],
                'Parrafo17'=>$publicblog['Parrafo17'],
                'Parrafo18'=>$publicblog['Parrafo18'],
                'Parrafo19'=>$publicblog['Parrafo19'],
                'Parrafo20'=>$publicblog['Parrafo20'],
                'Parrafo21'=>$publicblog['Parrafo21'],
                'Unidad'=>$publicblog['Unidad'],
                'Imagen'=>$publicblog['Imagen'],
                'slug'=>$publicblog['slug'],
            ];
        }

        //Publicaciones del primer subtema
        $pblog1= InvPro::where('id', '<', 8)->get();
        $arregloblog1=[];
        foreach($pblog1 as $publicblog1)
        { 
            $arregloblog1[]=         
            [
                'id'=>$publicblog1['id'],
                'Titulo'=>$publicblog1['Titulo'],
                'Descripcion'=>$publicblog1['Descripcion'],
                'Parrafo1'=>$publicblog1['Parrafo1'],
                'Parrafo2'=>$publicblog1['Parrafo2'],
                'Parrafo3'=>$publicblog1['Parrafo3'],
                'Parrafo4'=>$publicblog1['Parrafo4'],
                'Parrafo5'=>$publicblog1['Parrafo5'],
                'Parrafo6'=>$publicblog1['Parrafo6'],
                'Parrafo7'=>$publicblog1['Parrafo7'],
                'Parrafo8'=>$publicblog1['Parrafo8'],
                'Parrafo9'=>$publicblog1['Parrafo9'],
                'Parrafo10'=>$publicblog1['Parrafo10'],
                'Parrafo11'=>$publicblog1['Parrafo11'],
                'Parrafo12'=>$publicblog1['Parrafo12'],
                'Parrafo13'=>$publicblog1['Parrafo13'],
                'Parrafo14'=>$publicblog1['Parrafo14'],
                'Parrafo15'=>$publicblog1['Parrafo15'],
                'Parrafo16'=>$publicblog1['Parrafo16'],
                'Parrafo17'=>$publicblog1['Parrafo17'],
                'Parrafo18'=>$publicblog1['Parrafo18'],
                'Parrafo19'=>$publicblog1['Parrafo19'],
                'Parrafo20'=>$publicblog1['Parrafo20'],
                'Parrafo21'=>$publicblog1['Parrafo21'],
                'Unidad'=>$publicblog1['Unidad'],
                'Imagen'=>$publicblog1['Imagen'],
                'slug'=>$publicblog1['slug'],
            ];
        }
        //Publicaciones del segundo subtema
        $pblog2= InvPro::where('id', '>=', 8)->where('id', '<', 14)->get();
        $arregloblog2=[];
        foreach($pblog2 as $publicblog2)
        { 
            $arregloblog2[]=         
            [
                'id'=>$publicblog2['id'],
                'Titulo'=>$publicblog2['Titulo'],
                'Descripcion'=>$publicblog2['Descripcion'],
                'Parrafo1'=>$publicblog2['Parrafo1'],
                'Parrafo2'=>$publicblog2['Parrafo2'],
                'Parrafo3'=>$publicblog2['Parrafo3'],
                'Parrafo4'=>$publicblog2['Parrafo4'],
                'Parrafo5'=>$publicblog2['Parrafo5'],
                'Parrafo6'=>$publicblog2['Parrafo6'],
                'Parrafo7'=>$publicblog2['Parrafo7'],
                'Parrafo8'=>$publicblog2['Parrafo8'],
                'Parrafo9'=>$publicblog2['Parrafo9'],
                'Parrafo10'=>$publicblog2['Parrafo10'],
                'Parrafo11'=>$publicblog2['Parrafo11'],
                'Parrafo12'=>$publicblog2['Parrafo12'],
                'Parrafo13'=>$publicblog2['Parrafo13'],
                'Parrafo14'=>$publicblog2['Parrafo14'],
                'Parrafo15'=>$publicblog2['Parrafo15'],
                'Parrafo16'=>$publicblog2['Parrafo16'],
                'Parrafo17'=>$publicblog2['Parrafo17'],
                'Parrafo18'=>$publicblog2['Parrafo18'],
                'Parrafo19'=>$publicblog2['Parrafo19'],
                'Parrafo20'=>$publicblog2['Parrafo20'],
                'Parrafo21'=>$publicblog2['Parrafo21'],
                'Unidad'=>$publicblog2['Unidad'],
                'Imagen'=>$publicblog2['Imagen'],
                'slug'=>$publicblog2['slug'],
            ];
        }
        //Publicaciones del tercer subtema
        $pblog3= InvPro::where('id', '>=', 14)->where('id', '<', 16)->get();
        $arregloblog3=[];
        foreach($pblog3 as $publicblog3)
        { 
            $arregloblog3[]=         
            [
                'id'=>$publicblog3['id'],
                'Titulo'=>$publicblog3['Titulo'],
                'Descripcion'=>$publicblog3['Descripcion'],
                'Parrafo1'=>$publicblog3['Parrafo1'],
                'Parrafo2'=>$publicblog3['Parrafo2'],
                'Parrafo3'=>$publicblog3['Parrafo3'],
                'Parrafo4'=>$publicblog3['Parrafo4'],
                'Parrafo5'=>$publicblog3['Parrafo5'],
                'Parrafo6'=>$publicblog3['Parrafo6'],
                'Parrafo7'=>$publicblog3['Parrafo7'],
                'Parrafo8'=>$publicblog3['Parrafo8'],
                'Parrafo9'=>$publicblog3['Parrafo9'],
                'Parrafo10'=>$publicblog3['Parrafo10'],
                'Parrafo11'=>$publicblog3['Parrafo11'],
                'Parrafo12'=>$publicblog3['Parrafo12'],
                'Parrafo13'=>$publicblog3['Parrafo13'],
                'Parrafo14'=>$publicblog3['Parrafo14'],
                'Parrafo15'=>$publicblog3['Parrafo15'],
                'Parrafo16'=>$publicblog3['Parrafo16'],
                'Parrafo17'=>$publicblog3['Parrafo17'],
                'Parrafo18'=>$publicblog3['Parrafo18'],
                'Parrafo19'=>$publicblog3['Parrafo19'],
                'Parrafo20'=>$publicblog3['Parrafo20'],
                'Parrafo21'=>$publicblog3['Parrafo21'],
                'Unidad'=>$publicblog3['Unidad'],
                'Imagen'=>$publicblog3['Imagen'],
                'slug'=>$publicblog3['slug'],
            ];
        }
        //Publicaciones del cuarto subtema
        $pblog4= InvPro::where('id', '>=', 16)->where('id', '<', 20)->get();
        $arregloblog4=[];
        foreach($pblog4 as $publicblog4)
        { 
            $arregloblog4[]=         
            [
                'id'=>$publicblog4['id'],
                'Titulo'=>$publicblog4['Titulo'],
                'Descripcion'=>$publicblog4['Descripcion'],
                'Parrafo1'=>$publicblog4['Parrafo1'],
                'Parrafo2'=>$publicblog4['Parrafo2'],
                'Parrafo3'=>$publicblog4['Parrafo3'],
                'Parrafo4'=>$publicblog4['Parrafo4'],
                'Parrafo5'=>$publicblog4['Parrafo5'],
                'Parrafo6'=>$publicblog4['Parrafo6'],
                'Parrafo7'=>$publicblog4['Parrafo7'],
                'Parrafo8'=>$publicblog4['Parrafo8'],
                'Parrafo9'=>$publicblog4['Parrafo9'],
                'Parrafo10'=>$publicblog4['Parrafo10'],
                'Parrafo11'=>$publicblog4['Parrafo11'],
                'Parrafo12'=>$publicblog4['Parrafo12'],
                'Parrafo13'=>$publicblog4['Parrafo13'],
                'Parrafo14'=>$publicblog4['Parrafo14'],
                'Parrafo15'=>$publicblog4['Parrafo15'],
                'Parrafo16'=>$publicblog4['Parrafo16'],
                'Parrafo17'=>$publicblog4['Parrafo17'],
                'Parrafo18'=>$publicblog4['Parrafo18'],
                'Parrafo19'=>$publicblog4['Parrafo19'],
                'Parrafo20'=>$publicblog4['Parrafo20'],
                'Parrafo21'=>$publicblog4['Parrafo21'],
                'Unidad'=>$publicblog4['Unidad'],
                'Imagen'=>$publicblog4['Imagen'],
                'slug'=>$publicblog4['slug'],
            ];
        }
        //Publicaciones del quinto subtema
        $pblog5= InvPro::where('id', '>=', 20)->where('id', '<', 24)->get();
        $arregloblog5=[];
        foreach($pblog5 as $publicblog5)
        { 
            $arregloblog5[]=         
            [
                'id'=>$publicblog5['id'],
                'Titulo'=>$publicblog5['Titulo'],
                'Descripcion'=>$publicblog5['Descripcion'],
                'Parrafo1'=>$publicblog5['Parrafo1'],
                'Parrafo2'=>$publicblog5['Parrafo2'],
                'Parrafo3'=>$publicblog5['Parrafo3'],
                'Parrafo4'=>$publicblog5['Parrafo4'],
                'Parrafo5'=>$publicblog5['Parrafo5'],
                'Parrafo6'=>$publicblog5['Parrafo6'],
                'Parrafo7'=>$publicblog5['Parrafo7'],
                'Parrafo8'=>$publicblog5['Parrafo8'],
                'Parrafo9'=>$publicblog5['Parrafo9'],
                'Parrafo10'=>$publicblog5['Parrafo10'],
                'Parrafo11'=>$publicblog5['Parrafo11'],
                'Parrafo12'=>$publicblog5['Parrafo12'],
                'Parrafo13'=>$publicblog5['Parrafo13'],
                'Parrafo14'=>$publicblog5['Parrafo14'],
                'Parrafo15'=>$publicblog5['Parrafo15'],
                'Parrafo16'=>$publicblog5['Parrafo16'],
                'Parrafo17'=>$publicblog5['Parrafo17'],
                'Parrafo18'=>$publicblog5['Parrafo18'],
                'Parrafo19'=>$publicblog5['Parrafo19'],
                'Parrafo20'=>$publicblog5['Parrafo20'],
                'Parrafo21'=>$publicblog5['Parrafo21'],
                'Unidad'=>$publicblog5['Unidad'],
                'Imagen'=>$publicblog5['Imagen'],
                'slug'=>$publicblog5['slug'],
            ];
        }

        //Publicaciones del sexto subtema
        $pblog6= InvPro::where('id', '>=', 24)->where('id', '<', 28)->get();
        $arregloblog6=[];
        foreach($pblog6 as $publicblog6)
        { 
            $arregloblog6[]=         
            [
                'id'=>$publicblog6['id'],
                'Titulo'=>$publicblog6['Titulo'],
                'Descripcion'=>$publicblog6['Descripcion'],
                'Parrafo1'=>$publicblog6['Parrafo1'],
                'Parrafo2'=>$publicblog6['Parrafo2'],
                'Parrafo3'=>$publicblog6['Parrafo3'],
                'Parrafo4'=>$publicblog6['Parrafo4'],
                'Parrafo5'=>$publicblog6['Parrafo5'],
                'Parrafo6'=>$publicblog6['Parrafo6'],
                'Parrafo7'=>$publicblog6['Parrafo7'],
                'Parrafo8'=>$publicblog6['Parrafo8'],
                'Parrafo9'=>$publicblog6['Parrafo9'],
                'Parrafo10'=>$publicblog6['Parrafo10'],
                'Parrafo11'=>$publicblog6['Parrafo11'],
                'Parrafo12'=>$publicblog6['Parrafo12'],
                'Parrafo13'=>$publicblog6['Parrafo13'],
                'Parrafo14'=>$publicblog6['Parrafo14'],
                'Parrafo15'=>$publicblog6['Parrafo15'],
                'Parrafo16'=>$publicblog6['Parrafo16'],
                'Parrafo17'=>$publicblog6['Parrafo17'],
                'Parrafo18'=>$publicblog6['Parrafo18'],
                'Parrafo19'=>$publicblog6['Parrafo19'],
                'Parrafo20'=>$publicblog6['Parrafo20'],
                'Parrafo21'=>$publicblog6['Parrafo21'],
                'Unidad'=>$publicblog6['Unidad'],
                'Imagen'=>$publicblog6['Imagen'],
                'slug'=>$publicblog6['slug'],
            ];
        }
        
        return view('index',['pblog'=>$arregloblog,'pblog1'=>$arregloblog1,'pblog2'=>$arregloblog2, 'pblog3'=>$arregloblog3,'pblog4'=>$arregloblog4,'pblog5'=>$arregloblog5,'pblog6'=>$arregloblog6]);
    }
    
    public function tema($slug){
        
        $pblog= InvPro::where('slug',$slug)->first();

        //Publicaciones del primer subtema
        $pblog1= InvPro::where('id', '<', 8)->get();
        $arregloblog1=[];
        foreach($pblog1 as $publicblog1)
        { 
            $arregloblog1[]=         
            [
                'id'=>$publicblog1['id'],
                'Titulo'=>$publicblog1['Titulo'],
                'Descripcion'=>$publicblog1['Descripcion'],
                'Parrafo1'=>$publicblog1['Parrafo1'],
                'Parrafo2'=>$publicblog1['Parrafo2'],
                'Parrafo3'=>$publicblog1['Parrafo3'],
                'Parrafo4'=>$publicblog1['Parrafo4'],
                'Parrafo5'=>$publicblog1['Parrafo5'],
                'Parrafo6'=>$publicblog1['Parrafo6'],
                'Parrafo7'=>$publicblog1['Parrafo7'],
                'Parrafo8'=>$publicblog1['Parrafo8'],
                'Parrafo9'=>$publicblog1['Parrafo9'],
                'Parrafo10'=>$publicblog1['Parrafo10'],
                'Parrafo11'=>$publicblog1['Parrafo11'],
                'Parrafo12'=>$publicblog1['Parrafo12'],
                'Parrafo13'=>$publicblog1['Parrafo13'],
                'Parrafo14'=>$publicblog1['Parrafo14'],
                'Parrafo15'=>$publicblog1['Parrafo15'],
                'Parrafo16'=>$publicblog1['Parrafo16'],
                'Parrafo17'=>$publicblog1['Parrafo17'],
                'Parrafo18'=>$publicblog1['Parrafo18'],
                'Parrafo19'=>$publicblog1['Parrafo19'],
                'Parrafo20'=>$publicblog1['Parrafo20'],
                'Parrafo21'=>$publicblog1['Parrafo21'],
                'Unidad'=>$publicblog1['Unidad'],
                'Imagen'=>$publicblog1['Imagen'],
                'slug'=>$publicblog1['slug'],
            ];
        }
        //Publicaciones del segundo subtema
        $pblog2= InvPro::where('id', '>=', 8)->where('id', '<', 14)->get();
        $arregloblog2=[];
        foreach($pblog2 as $publicblog2)
        { 
            $arregloblog2[]=         
            [
                'id'=>$publicblog2['id'],
                'Titulo'=>$publicblog2['Titulo'],
                'Descripcion'=>$publicblog2['Descripcion'],
                'Parrafo1'=>$publicblog2['Parrafo1'],
                'Parrafo2'=>$publicblog2['Parrafo2'],
                'Parrafo3'=>$publicblog2['Parrafo3'],
                'Parrafo4'=>$publicblog2['Parrafo4'],
                'Parrafo5'=>$publicblog2['Parrafo5'],
                'Parrafo6'=>$publicblog2['Parrafo6'],
                'Parrafo7'=>$publicblog2['Parrafo7'],
                'Parrafo8'=>$publicblog2['Parrafo8'],
                'Parrafo9'=>$publicblog2['Parrafo9'],
                'Parrafo10'=>$publicblog2['Parrafo10'],
                'Parrafo11'=>$publicblog2['Parrafo11'],
                'Parrafo12'=>$publicblog2['Parrafo12'],
                'Parrafo13'=>$publicblog2['Parrafo13'],
                'Parrafo14'=>$publicblog2['Parrafo14'],
                'Parrafo15'=>$publicblog2['Parrafo15'],
                'Parrafo16'=>$publicblog2['Parrafo16'],
                'Parrafo17'=>$publicblog2['Parrafo17'],
                'Parrafo18'=>$publicblog2['Parrafo18'],
                'Parrafo19'=>$publicblog2['Parrafo19'],
                'Parrafo20'=>$publicblog2['Parrafo20'],
                'Parrafo21'=>$publicblog2['Parrafo21'],
                'Unidad'=>$publicblog2['Unidad'],
                'Imagen'=>$publicblog2['Imagen'],
                'slug'=>$publicblog2['slug'],
            ];
        }
        //Publicaciones del tercer subtema
        $pblog3= InvPro::where('id', '>=', 14)->where('id', '<', 16)->get();
        $arregloblog3=[];
        foreach($pblog3 as $publicblog3)
        { 
            $arregloblog3[]=         
            [
                'id'=>$publicblog3['id'],
                'Titulo'=>$publicblog3['Titulo'],
                'Descripcion'=>$publicblog3['Descripcion'],
                'Parrafo1'=>$publicblog3['Parrafo1'],
                'Parrafo2'=>$publicblog3['Parrafo2'],
                'Parrafo3'=>$publicblog3['Parrafo3'],
                'Parrafo4'=>$publicblog3['Parrafo4'],
                'Parrafo5'=>$publicblog3['Parrafo5'],
                'Parrafo6'=>$publicblog3['Parrafo6'],
                'Parrafo7'=>$publicblog3['Parrafo7'],
                'Parrafo8'=>$publicblog3['Parrafo8'],
                'Parrafo9'=>$publicblog3['Parrafo9'],
                'Parrafo10'=>$publicblog3['Parrafo10'],
                'Parrafo11'=>$publicblog3['Parrafo11'],
                'Parrafo12'=>$publicblog3['Parrafo12'],
                'Parrafo13'=>$publicblog3['Parrafo13'],
                'Parrafo14'=>$publicblog3['Parrafo14'],
                'Parrafo15'=>$publicblog3['Parrafo15'],
                'Parrafo16'=>$publicblog3['Parrafo16'],
                'Parrafo17'=>$publicblog3['Parrafo17'],
                'Parrafo18'=>$publicblog3['Parrafo18'],
                'Parrafo19'=>$publicblog3['Parrafo19'],
                'Parrafo20'=>$publicblog3['Parrafo20'],
                'Parrafo21'=>$publicblog3['Parrafo21'],
                'Unidad'=>$publicblog3['Unidad'],
                'Imagen'=>$publicblog3['Imagen'],
                'slug'=>$publicblog3['slug'],
            ];
        }
        //Publicaciones del cuarto subtema
        $pblog4= InvPro::where('id', '>=', 16)->where('id', '<', 20)->get();
        $arregloblog4=[];
        foreach($pblog4 as $publicblog4)
        { 
            $arregloblog4[]=         
            [
                'id'=>$publicblog4['id'],
                'Titulo'=>$publicblog4['Titulo'],
                'Descripcion'=>$publicblog4['Descripcion'],
                'Parrafo1'=>$publicblog4['Parrafo1'],
                'Parrafo2'=>$publicblog4['Parrafo2'],
                'Parrafo3'=>$publicblog4['Parrafo3'],
                'Parrafo4'=>$publicblog4['Parrafo4'],
                'Parrafo5'=>$publicblog4['Parrafo5'],
                'Parrafo6'=>$publicblog4['Parrafo6'],
                'Parrafo7'=>$publicblog4['Parrafo7'],
                'Parrafo8'=>$publicblog4['Parrafo8'],
                'Parrafo9'=>$publicblog4['Parrafo9'],
                'Parrafo10'=>$publicblog4['Parrafo10'],
                'Parrafo11'=>$publicblog4['Parrafo11'],
                'Parrafo12'=>$publicblog4['Parrafo12'],
                'Parrafo13'=>$publicblog4['Parrafo13'],
                'Parrafo14'=>$publicblog4['Parrafo14'],
                'Parrafo15'=>$publicblog4['Parrafo15'],
                'Parrafo16'=>$publicblog4['Parrafo16'],
                'Parrafo17'=>$publicblog4['Parrafo17'],
                'Parrafo18'=>$publicblog4['Parrafo18'],
                'Parrafo19'=>$publicblog4['Parrafo19'],
                'Parrafo20'=>$publicblog4['Parrafo20'],
                'Parrafo21'=>$publicblog4['Parrafo21'],
                'Unidad'=>$publicblog4['Unidad'],
                'Imagen'=>$publicblog4['Imagen'],
                'slug'=>$publicblog4['slug'],
            ];
        }
        //Publicaciones del quinto subtema
        $pblog5= InvPro::where('id', '>=', 20)->where('id', '<', 24)->get();
        $arregloblog5=[];
        foreach($pblog5 as $publicblog5)
        { 
            $arregloblog5[]=         
            [
                'id'=>$publicblog5['id'],
                'Titulo'=>$publicblog5['Titulo'],
                'Descripcion'=>$publicblog5['Descripcion'],
                'Parrafo1'=>$publicblog5['Parrafo1'],
                'Parrafo2'=>$publicblog5['Parrafo2'],
                'Parrafo3'=>$publicblog5['Parrafo3'],
                'Parrafo4'=>$publicblog5['Parrafo4'],
                'Parrafo5'=>$publicblog5['Parrafo5'],
                'Parrafo6'=>$publicblog5['Parrafo6'],
                'Parrafo7'=>$publicblog5['Parrafo7'],
                'Parrafo8'=>$publicblog5['Parrafo8'],
                'Parrafo9'=>$publicblog5['Parrafo9'],
                'Parrafo10'=>$publicblog5['Parrafo10'],
                'Parrafo11'=>$publicblog5['Parrafo11'],
                'Parrafo12'=>$publicblog5['Parrafo12'],
                'Parrafo13'=>$publicblog5['Parrafo13'],
                'Parrafo14'=>$publicblog5['Parrafo14'],
                'Parrafo15'=>$publicblog5['Parrafo15'],
                'Parrafo16'=>$publicblog5['Parrafo16'],
                'Parrafo17'=>$publicblog5['Parrafo17'],
                'Parrafo18'=>$publicblog5['Parrafo18'],
                'Parrafo19'=>$publicblog5['Parrafo19'],
                'Parrafo20'=>$publicblog5['Parrafo20'],
                'Parrafo21'=>$publicblog5['Parrafo21'],
                'Unidad'=>$publicblog5['Unidad'],
                'Imagen'=>$publicblog5['Imagen'],
                'slug'=>$publicblog5['slug'],
            ];
        }

        //Publicaciones del sexto subtema
        $pblog6= InvPro::where('id', '>=', 24)->where('id', '<', 28)->get();
        $arregloblog6=[];
        foreach($pblog6 as $publicblog6)
        { 
            $arregloblog6[]=         
            [
                'id'=>$publicblog6['id'],
                'Titulo'=>$publicblog6['Titulo'],
                'Descripcion'=>$publicblog6['Descripcion'],
                'Parrafo1'=>$publicblog6['Parrafo1'],
                'Parrafo2'=>$publicblog6['Parrafo2'],
                'Parrafo3'=>$publicblog6['Parrafo3'],
                'Parrafo4'=>$publicblog6['Parrafo4'],
                'Parrafo5'=>$publicblog6['Parrafo5'],
                'Parrafo6'=>$publicblog6['Parrafo6'],
                'Parrafo7'=>$publicblog6['Parrafo7'],
                'Parrafo8'=>$publicblog6['Parrafo8'],
                'Parrafo9'=>$publicblog6['Parrafo9'],
                'Parrafo10'=>$publicblog6['Parrafo10'],
                'Parrafo11'=>$publicblog6['Parrafo11'],
                'Parrafo12'=>$publicblog6['Parrafo12'],
                'Parrafo13'=>$publicblog6['Parrafo13'],
                'Parrafo14'=>$publicblog6['Parrafo14'],
                'Parrafo15'=>$publicblog6['Parrafo15'],
                'Parrafo16'=>$publicblog6['Parrafo16'],
                'Parrafo17'=>$publicblog6['Parrafo17'],
                'Parrafo18'=>$publicblog6['Parrafo18'],
                'Parrafo19'=>$publicblog6['Parrafo19'],
                'Parrafo20'=>$publicblog6['Parrafo20'],
                'Parrafo21'=>$publicblog6['Parrafo21'],
                'Unidad'=>$publicblog6['Unidad'],
                'Imagen'=>$publicblog6['Imagen'],
                'slug'=>$publicblog6['slug'],
            ];
        }
        if($pblog){
            return view('publicacion', ['pblog' => $pblog, 'pblog1' => $arregloblog1, 'pblog2' => $arregloblog2, 'pblog3' => $arregloblog3, 'pblog4' => $arregloblog4,'pblog5' => $arregloblog5, 'pblog6' => $arregloblog6]);
        }else{
            echo 'No se encuentra';
        }
        
    }
}
