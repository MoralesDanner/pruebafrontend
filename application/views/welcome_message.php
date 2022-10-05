
		<br><br>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
				<button id="btnActualizar" type="button" class="btn btn-dark">Actualizar&nbsp;&nbsp;<i class="bi bi-arrow-clockwise"></i></button>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table id="tablaMonedas" class="table table-hover table-striped table-dark">
						<thead>
							<tr class="text-center hover">
								<th scope="col" onclick="sortTable(0,'int')">#</th>
								<th scope="col" onclick="sortTable(1,'str')">Nombre</th>
								<th scope="col" onclick="sortTable(2,'str')">Precio</th>
								<th scope="col" onclick="sortTable(3,'str')">Capitalización</th>
								<th scope="col" onclick="sortTable(4,'str')">Suministro Máximo</th>
								<th scope="col" onclick="sortTable(5,'str')">Suministro Circulante</th>
								<th scope="col" onclick="sortTable(6,'str')">1D %</th>
								<th scope="col" onclick="sortTable(7,'str')">30 %</th>
							</tr>
						</thead>
						<tbody id="data">
						</tbody>
						</table>
					</div>
					<script src="<?php echo base_url(); ?>/assets/librerias/api.js"></script>
				</div>
			</div>
		</div>


		<script>
			//Funcion ordenar por tabla
			function sortTable(n,type) {
				var table,rows,switching,i,x,y,shouldSwitch,dir,switchcount=0;
				table=document.getElementById("tablaMonedas");
				switching=true;
				dir="asc";
				while(switching){
					switching=false;
					rows=table.rows;
					for(i=1;i<(rows.length-1);i++){
						shouldSwitch=false;
						x=rows[i].getElementsByTagName("TD")[n];
						y=rows[i+1].getElementsByTagName("TD")[n];
						if(dir=="asc"){
							if ((type=="str"&&x.innerHTML.toLowerCase()>y.innerHTML.toLowerCase())||(type=="int"&&parseFloat(x.innerHTML)>parseFloat(y.innerHTML))){
								shouldSwitch= true;
								break;
							}
						}else if(dir=="desc") {
							if((type=="str"&&x.innerHTML.toLowerCase()<y.innerHTML.toLowerCase())||(type=="int"&&parseFloat(x.innerHTML)<parseFloat(y.innerHTML))){
								shouldSwitch = true;
								break;
							}
						}
					}
					if(shouldSwitch){
						rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
						switching=true;
						switchcount ++;
					}else{
						if(switchcount==0 && dir=="asc"){
							dir="desc";
							switching=true;
						}
					}
				}
			}
		</script>

		<script>
			//Funcion para buscar
			$(document).ready(function(){
				$("#Buscar").keyup(function(){
					_this = this;
					$.each($("#tablaMonedas tbody tr"), function() {
						if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
							$(this).hide();
						else
							$(this).show();
					});
				});
			});
		</script>