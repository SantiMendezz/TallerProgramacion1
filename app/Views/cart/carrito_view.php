<?php
    $session = session();
    $cart = \Config\Services::cart();
    $cart = $cart->contents();

    //Cuando el carrito esta vacio se muestra
    if (empty($cart)) { ?>
    <div class="centrar-texto">
        <h2>Tienes un carrito por llenar</h2>
        <p class="mt-2 mb-2" style="font-weight: 700">Actualmente no tienes ningún artículo agregado</p>
        <p>Puedes elegir entre muchos productos</p>
        <img src="<?php echo base_url('public/assets/img/carrito-when-vacio.png');?>"
            style="width: 30%; height:30%">
        <p>Siempre garantizamos la máxima calidad</p>
    </div>
    <?php } ?>

        <?php
            //if ($cart = $this->cart->contents());
            //Esta funcion devuelve un array de los elementos agregados en el carro
            if ($cart == TRUE) {
        ?>
        <div class="container mt-5 centrar-texto" style="higth: 100rem;">
            <h1 class="centrar-texto pb-2 pt-3">Carrito</h1>
            <div class="col-md-12 ">
                <table class="table table table-dark table-striped" >
        <thead class="table-primary table-info" >
        <tr class="">
            <td></td>
            <td>Nombre producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Subtotal</td>
            <td>Cancelar producto</td>
        </tr>
        </thead>
        <tbody>
        <?php
        helper('form');
        //Controller de actualiza-carrito
            echo form_open('Cart_controller/actualiza_carrito/');
                $gran_total = 0;
                $i = 1;
                //El foreach (this->cart->contents() as $item):
                    foreach ($cart as $item):
                        echo "<tbody class='table table-info'>";
                        echo form_hidden('cart[' . $item['id'] . '][id]' , $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][name]' , $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]' , $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]' , $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]' , $item['qty']);
        ?>
        <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $item['name'];?></td>
            <td>$<?php echo number_format($item['price'],2)?></td>
            <td><?php echo $item['qty'];?></td>
            <?php $gran_total = $gran_total + $item['subtotal'];?>
            <td>$<?php echo number_format($item['subtotal'],2)?></td>
            <td>
                <?php 
                    $path = '<img src= "public/assets/img/borrar-un-producto.png" width="25px" height="20px">';
                    echo anchor('Cart_controller/eliminar_del_carrito/' . $item['rowid'], $path);
                ?>
            </td>
        </tr>
        <?php 
            endforeach;
        ?>

        <tr>
            <th>
                <b>Total: $
                    <?php 
                    echo number_format($gran_total,2);
                    ?>
                </b>
            </th>
            <th colspan="5" align="right">
                        
                        <?php
                    $path = '<img src= "public/assets/img/verifica.png" width="25px" height="20px">';
                    echo anchor('Cart_controller/comprar_carrito', $path);
                ?>
                <?php
                    $path = '<img src= "public/assets/img/borrar.png" width="25px" height="20px">';
                    echo anchor('Cart_controller/borrar_carrito', $path);
                ?>
                <input type="submit" class ='btn btn-outline-secondary' value="Actualizar" onclick="actualizar()">
                <!-- <button class ='btn btn-outline-success' href="<?php echo base_url('/comprar');?>">Confirmar Orden</button> -->
            </th>
                </tr>
                <?php echo form_close();?>
        </tr>
        <?php }?>
        </tbody>
    </table>
    </div>
</div>