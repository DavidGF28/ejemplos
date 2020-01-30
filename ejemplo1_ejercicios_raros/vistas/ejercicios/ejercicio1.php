<form method="get" action="<?= $this->crearRuta(["accion" => "ejercicio1"]) ?>">
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
        <button>Calcular</button>
    </div>
</form>
