<form method="get" action="<?= $this->crearRuta(["accion" => "ejercicio2"]) ?>">
    <div>
        <label for="n1">numero 1</label>
        <input type="number" name="numero[]" id="n1">
    </div>
    <div>
        <label for="n2">numero 2</label>
        <input type="number" name="numero[]" id="n2">
    </div>
    <div>
        <label for="suma">suma</label>
        <input type="number" name="numero[]" id="suma">
    </div>
    <div>
        <label for="resta">resta</label>
        <input type="number" name="numero[]" id="resta">
    </div>
    <div>
        <label for="producto">producto</label>
        <input type="number" name="numero[]" id="producto">
    </div>
    <div>
        <label for="cociente">cociente</label>
        <input type="number" name="numero[]" id="cociente">
    </div>
    <div>
        <label for="resto">resto</label>
        <input type="number" name="numero[]" id="resto">
    </div>
    <div>
        <button>Calcular</button>
    </div>
</form>
