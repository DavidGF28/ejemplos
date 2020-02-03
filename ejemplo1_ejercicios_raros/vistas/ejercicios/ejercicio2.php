<form method="get" action="<?= $this->crearRuta(["accion" => "rEjercicio2"]) ?>">
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
        <input type="number" name="numero[]" id="suma" disabled>
    </div>
    <div>
        <label for="resta">resta</label>
        <input type="number" name="numero[]" id="resta" disabled>
    </div>
    <div>
        <label for="producto">producto</label>
        <input type="number" name="numero[]" id="producto" disabled>
    </div>
    <div>
        <label for="cociente">cociente</label>
        <input type="number" name="numero[]" id="cociente" disabled>
    </div>
    <div>
        <label for="resto">resto</label>
        <input type="number" name="numero[]" id="resto" disabled>
    </div>
    <div>
        <button>Calcular</button>
    </div>
</form>
