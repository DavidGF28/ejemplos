<form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio1"])?>">
    <div>
    <label for="n1">Introduce numero 1</label>
    <input type="number" name="numero[]" id="n1">
    </div>
     <div>
    <label for="n2">Introduce numero 1</label>
    <input type="number" name="numero[]" id="n2">
    </div> <div>
    <label for="n3">Introduce numero 1</label>
    <input type="number" name="numero[]" id="n3">
    </div>
    <div>
        <button>Mostrar</button>
    </div>
</form>
