window.onload =function () {
	var oRowNum = document.getElementById('rowNum'); 
	var oColNum = document.getElementById('colNum'); 
	var oCreateButton = document.getElementById('create_tab');
	var oTable = document.getElementById('tbl_t');

	oCreateButton.onclick = function () {
	var row = oRowNum.value;	
	var col = oColNum.value;
		for (var i = 0; i < row; i++) {
			var tr = document.createElement("tr");
			for (var j = 0; j < col; j++) {
				var td = document.createElement("td");
				tr.appendChild(td);
			}
			var delButton = document.createElement("input");
			var addButton = document.createElement("input");
			delButton.type = "button";
			delButton.value = "删除";
			delButton.addEventListener("click",del,false);
			addButton.type = "button";
			addButton.value = "添加";
			addButton.addEventListener("click",add,false);
			tr.appendChild(addButton);
			tr.appendChild(delButton);
			oTable.appendChild(tr);
		}
	}
	function del() {
		this.parentNode.parentNode.removeChild(this.parentNode);
	}
	function add() {
	var col = oColNum.value;

		var tr = document.createElement("tr");
		for (var i = 0; i < col; i++) {
			var td = document.createElement("td");
			tr.appendChild(td);
		}
		var delButton = document.createElement("input");
		var addButton = document.createElement("input");
		delButton.type = "button";
		delButton.value = "删除";
		addButton.type = "button";
		addButton.value = "添加";
		delButton.addEventListener("click",del,false);
		addButton.addEventListener("click",add,false);
		tr.appendChild(addButton);
		tr.appendChild(delButton);
		oTable.appendChild(tr);
	}

}