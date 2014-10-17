<?php 
class BuscadorController extends BaseController 
{

    public function Buscarcosas()
    {
    	$string = '';
    	$contenido = array();
        $valor = Input::get('searcher');
        $busqueda = Informacion::where('cont_uni','LIKE',$valor.'%')->orderBy('cont_uni');      
        $busqueda_count = $busqueda->count();
        if ($busqueda_count>0) {
        	$busqueda_get = $busqueda->get();
           	return $busqueda->paginate(10);
        }else
        {
        	$busqueda = Informacion::where('Pais_uni','LIKE',$valor.'%')->orderBy('Pais_uni');
        	$busqueda_count = $busqueda->count();
        	if ($busqueda_count>0) {
        		$busqueda_get = $busqueda->get();
        		return $busqueda->paginate(10);
        	}else
        	{
        		$busqueda = Informacion::where('Ini_uni','LIKE',$valor.'%')
        		->where('Edo_uni','LIKE',$valor.'%','OR')
        		->where('Nom_uni','LIKE',$valor.'%','OR')->orderBy('Ini_uni');
        		$busqueda_count = $busqueda->count();
        		if ($busqueda_count>0) {
        			$busqueda_get = $busqueda->get();
        			return $busqueda->paginate(10);
        		}else
        		{
        			return 'No existe';
        		}
        		
        	}
        	

        }
    }
}
?>