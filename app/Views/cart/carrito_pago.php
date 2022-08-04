<?php
    $session = session();
    $cart = \Config\Services::cart();
    $cart = $cart->contents();
    $gran_total = 0;

    // Calcula gran total si el carrito tiene elementos
    if ($cart):
        foreach ($cart as $item):
            $gran_total = $gran_total + $item['subtotal'];
        endforeach;
    endif;
?>
<div class="container mt-4 mb-2 border-top border border-secondary rounded fondo2" style="width:40%;">
<div id="">

    <?php // Crea formulario para guarda los datos de la venta
    helper('form');
        echo form_open("Cart_controller/confirma_compra/" .$gran_total);
    ?>
    <div align="center">
        <h2 align="center">Información de la compra</h2>

        <table class="table " border="0" cellpadding="2px" >
            <tr>
                <td style="">
                    Total de la Compra:
                </td>
                <td>
                    <strong>$<?php echo number_format($gran_total, 2); ?></strong>
                </td>
            </tr>
            <tr>
                <td style="">
                    Nombre:
                </td>
                <td>
                    <?php echo $_SESSION['nombre'] ?>
                </td>
            </tr>
            <tr>
                <td style="">
                    Apellido:
                </td>
                <td>
                    <?php echo $_SESSION['apellido'] ?>
                </td>
            </tr>
            <tr>
                <td style="">
                    Email:
                </td>
                <td>
                    <?php echo $_SESSION['email'] ?>
                </td>
            </tr>
            <?php echo form_hidden('total_venta', $gran_total); ?>
        </table>
        <br> <br>
        <?php echo form_submit('confirmar', 'Confirmar',"class='btn btn-success'"); ?>
        <a class='btn btn-outline-danger' href="<?php echo base_url('carrito') ?>">Volver</a>
        <br> <br>
    </div>
</div>
    <?php echo form_close(); ?>

</div>