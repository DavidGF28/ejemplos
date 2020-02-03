<form method="get" action="<?= $this->crearRuta(["accion" => "Ejercicio1"]) ?>">
    <div>
        <label for="n1">numero 1</label>
        <input type="number" name="numero[]" id="n1" value="<?= $this->resultados->getValores()[0] ?>">
    </div>
    <div>
        <label for="n2">numero 2</label>
        <input type="number" name="numero[]" id="n2" value="<?= $this->resultados->getValores()[1] ?>">
    </div>
    <div>
        <label for="suma">suma</label>
        <input type="number" name="numero[]" id="suma" disabled value="<?= $this->resultados->getSuma() ?>">
    </div>
    <div>
        <button>Calcular</button>
    </div>
</form>
