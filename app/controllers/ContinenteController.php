<?php 
class ContinenteController extends BaseController 
{

    public function BuscarContinente()
    {
        $cont = Continente::where('activo','=',1)->get(); 
        $i = 0;
        $j = 0;
        $paises = array();
        $universidades = array();
        $seccion = array();
        foreach ($cont as $key) {
                if ($i%2!=0) {
                    $seccion[$i] = "bg-three bg-gradient font-negative";
                }else
                {
                    $seccion[$i] = "bg-one";
                }
                $pais = Paises::where('activo','=','1')->where('id_cont','=',$key->id)->orderBy('nombre', 'DESC')->get();
                $paises[$i] = $pais;
                foreach ($paises[$i] as $unis) 
                {
                    $info = Informacion::where('activo','=','1')->where('Pais_uni','=',ucwords(strtolower($unis->nombre)))->get();
                    $universidades[$j] = $info;
                    $j++;
                }
                $i++;
        }    
        return View::make('inicio')->with('continente',$cont)->with('paises',$paises)->with('universidades',$universidades)->with('seccion',$seccion);
    }
    public function seccion($i)
    {

    }
    public function BuscarPaises($continente)
    {
        $i = 0;
        $j=0;
        $k = 0;
        $bandera = 0;
        $abecedarios = array('a-b-c','d-e-f','g-h-i','j-k-l','m-n-ñ','o-p-q','r-s-t','u-v-w','x-y-z');
        $letra = array();
        $seccion = array(); 
        $universidades = array();
        $paises = DB::table('Informacion')
            ->select(DB::raw('distinct Pais_uni')) 
            ->where('Cont_uni','=',ucwords(strtolower(utf8_decode($continente))))
            ->orderBy('Pais_uni')->get();
        foreach ($paises as $pais) {
            $info = Informacion::where('activo','=','1')->where('Pais_uni','=',ucwords(strtolower($pais->Pais_uni)))->get();
            $universidades[$k] = $info;
            for($j = 0;$j<count($abecedarios);$j++)
            {
                if (strtoupper($abecedarios[$j][0])==$pais->Pais_uni[0] or strtoupper($abecedarios[$j][2])==$pais->Pais_uni[0] or strtoupper($abecedarios[$j][4])==$pais->Pais_uni[0]) {
                   $letra[$i] = $abecedarios[$j];
                    if ($i%2!=0) {
                        $seccion[$i] = "bg-three bg-gradient font-negative";
                    }else
                    {
                        $seccion[$i] = "bg-one";
                    }
                    if (count($letra)>0) {
                        for ($l=1; $l < count($letra); $l++) { 
                            if ($letra[$l-1] == $abecedarios[$j]) {
                                $bandera = 1;  
                            }   
                        }
                    }
                    if ($bandera == 0) {
                        $i++;
                    }
                    $bandera = 0;
                    
                    
                }
            }
            $k++;
        }
        return View::make('continentes')->with('cont',$continente)->with('seccion',$seccion)->with('letra',$letra)->with('universidades',$universidades)->with('paises',$paises);

    }
}
?>