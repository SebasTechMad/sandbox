<hr>
<button onclick="location.href='./'" > Volver </button>
<br><br>
<table>
 <tr><td>id:</td> 
 <td><input type="number" name="id" value="<?=$cli->id ?>"  readonly > </td>
 <td rowspan="7">
<div class="display:flex; width:10rem; gap:1rem;">
    <img src="<?= $bandera ?>" style="width: 200px;"></img>
    <img src="<?= $imgURL ?>" style="width: 200px;"></img>
</div>
</td> 
</tr>
 <tr><td>first_name:</td> 
 <td><input type="text" name="first_name" value="<?=$cli->first_name ?>" readonly > </td></tr>
 </tr>
 <tr><td>last_name:</td> 
 <td><input type="text" name="last_name" value="<?=$cli->last_name ?>" readonly ></td></tr>
 </tr>
 <tr><td>email:</td> 
 <td><input type="email" name="email" value="<?=$cli->email ?>"   readonly  ></td></tr>
 </tr>
 <tr><td>gender</td> 
 <td><input type="text" name="gender" value="<?=$cli->gender ?>" readonly ></td></tr>
 </tr>
 <tr><td>ip_address:</td> 
 <td><input type="text" name="ip_address" value="<?=$cli->ip_address ?>" readonly ></td></tr>
 </tr>
 <tr><td>telefono:</td> 
 <td><input type="tel" name="telefono" value="<?=$cli->telefono ?>" readonly ></td></tr>
 </tr>
 </table>

<?php if($cli): ?>
    <form action="" method="GET">
        <input type="submit" name="orden" value="Imprimir">
        <input type="submit" name="orden" value="Anterior">
        <input type="submit" name="orden" value="Siguiente">
        <input type="hidden" value="<?= $_SESSION['current_id'] = $cli->id ?>">
    </form>

<?php endif; ?>
 

