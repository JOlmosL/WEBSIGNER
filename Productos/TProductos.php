<?php 
	$result = mysqli_query($conn, $TodosProductos);
	$content='<div class="row" id="myUL">'	;
	while($row = mysqli_fetch_assoc($result)){
		$content.='<div class="col-3 card" style="width: 18rem; margin-top: 10px; cursor: pointer;">
          <img src="https://images-na.ssl-images-amazon.com/images/I/810Klt%2BNDTL._AC_SX425_.jpg" class="card-img-top imgsetup" alt="...">
          <div class="card-body" style="text-align: center;">
            <label class="card-text">'.$row["NombreProducto"].'</label>
          </div>
        </div>';
	}
	$content .= '</div></div>';
	echo $content;
?>