var to_do = new Array();

function update_list(ret)
{
	var list = document.getElementById("ft_list");

	list.innerHTML = "";

	if (to_do.length > 0) {
			to_do.forEach(function (currentElement, index) {
				var newLi = document.createElement("li");
				var newLiAction = document.createElement("a");
				newLiAction.innerHTML = currentElement;
				newLiAction.setAttribute("onclick", "deleteTodo(this);");
				newLiAction.setAttribute("href", "#");
				newLi.appendChild(newLiAction);
				list.appendChild(newLi);
			});
		}
}

function deleteTodo(element)
{
	var todoToDelete = to_do.indexOf(element.innerHTML);
	var newToDo = new Array();
	var choice = confirm("En êtes vous vraiment sûr ? (car tout dépend ...)");

	if (choice == true)
		to_do.splice(todoToDelete, 1);
	else
		alert("Psahtek.", "PSAHTEK LA FAMILLE");
	update_list();
}

function promptUp()
{
	var ret = prompt("Quel 'to do' voulez-vous ajouter ?:", "");
	if (ret.length > 0) {
		to_do.push(ret);
		update_list();
	}

}
