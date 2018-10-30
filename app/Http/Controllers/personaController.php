<?php

namespace sysControl\Http\Controllers;

use Illuminate\Http\Request;
use sysControl\Persona;

class personaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //print ('estas en el index');

        /* $resultadoPersona = Persona::all();
          print_r($resultadoPersona); */

        /* $chiuches = [ 'a', 'b', 'c'];
          $notas = [ 1, 2, 3];
          print ($chiuches[1]);
          print ($notas[2]);

          $merito = ['desaprobado'=> '1', 'repechaje'=>'2', 'aprobado'=>'3'];
          print($merito['repechaje']);

          $licencia = [['tramite','entregado'], 'A', 'B'];
          print($licencia[0][0]);

          $estado = ['vigencia'=>[1,2,3,4], 'febrero'=>['primera quincena','segunda quincena'] ];
          print($estado['vigencia'][2]);
          print($estado['febrero'][1]);


          $categoria=[  "licencia" => ["a"=>[1,2,3],"B" => [1,2,3]],"VEHICULOS" => "autos", 'llantas'=>[1,2,3,4]  ];
          print ($categoria['licencia']['a'][2]);
          print ($categoria['VEHICULOS']);
          print ($categoria['llantas'][3]); */

        /*$horario = ['lun' => ['m' => 'retama', 't' => 'aldehus', 'n' => '3bits'],
            'mar' => ['m' => 'tumi', 't' => 'radio', 'n' => 'siaf'],
            'mie' => ['m' => 'siga', 't' => 'programacion', 'n' => 'oratoria'],
            'jue' => ['m' => 'matematica', 't' => 'lenguaje', 'n' => 'trigonometria'],
            'vie' => ['m' => 'fisica', 't' => 'arte', 'n' => 'limpieza'],
            'sab' => ['m' => 'deporte', 't' => 'reunion', 'n' => 'volanteo']
        ];*/

        /*for($i =0 ; $i < 2; $i++):     
       
        
        print("<table border='1'>");
            print ('<th>dias</th>');
            print ('<th>mañana</th>');
            print ('<th>tarde</th>');
            print ('<th>noche</th>');
        
            foreach ($horario as $key => $dia):
                print ('<tr>');
                    print ('<td>');
                        print ($key);
                    print ('</td>');

                    
                    print ('<td>');
                        print($dia['m']);
                    print ('</td>');


                    print ('<td>');
                        print ($dia['t']);
                    print ('</td>');


                    print ('<td>');
                        print ($dia['n']);
                    print ('</td>');


                print ('</tr>');

            endforeach;


        print('</table>');
        
        print '<br>';
        
         endfor;*/
        $resultadopersona = persona::all();
        print_r($resultadopersona);
        print('bienvenido al Index de Persona');
        
                   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        print ('aki esta el formulario de crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
