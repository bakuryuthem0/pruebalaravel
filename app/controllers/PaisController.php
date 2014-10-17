<?php 
class PaisController extends BaseController 
{

    public function BuscarPais($pais)
    {
        $aux = DB::table('Informacion')->select(DB::raw('distinct Edo_uni'))
        ->where('Pais_uni','=',ucwords(strtolower(utf8_decode($pais))))->get();
        $aux2 =Informacion::where('Pais_uni','=',ucwords(strtolower(utf8_decode($pais))))->get();
        $estados = array();
        $todo = array();
        $estados_aux = array();
        $i = 0;
        foreach ($aux as $cosa) 
        {
            $estados[$i] = $cosa->Edo_uni;
            $i++;
        }
        foreach ($aux2 as $value) {
            $todo[$i] = $value;
            if (strpos(utf8_encode($todo[$i]->Edo_uni)," " ) != 0) {
                $todo[$i]->Edo_uni = str_replace(" ", "_", trim($todo[$i]->Edo_uni));
            }else
            {
                $todo[$i]->Edo_uni = $value->Edo_uni;
            }
            $i++;
        }
        return View::make('estados')->with('pais',ucwords(strtolower($pais)))->with('estados',$estados)->with('todo',$todo);
    }
}
?>