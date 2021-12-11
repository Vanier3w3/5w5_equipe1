(function(){
	let project = document.getElementsByClassName("conteneur1")
	let close = document.getElementsByClassName("close")
	let descOuvert = false
	for(const projects of project){
		projects.addEventListener("click", function(event){
			if(!descOuvert){
				let target = event.target
				let id = 0
				if(target.parentElement.id){
					id = target.parentElement.id
					description(id)
				}
				else{
					id = target.parentElement.parentElement.id
					description(id)
				}
				descOuvert = true
			}
		})
	}
	

	for(const closes of close){
		closes.addEventListener("click", function(event){
			console.log("jbvsb")
			let target = event.target
			let parent = target.parentElement
			parent.classList.remove("displayed")
			descOuvert = false
		})
	}
	}()
)	

function description(id){
	let desc = document.getElementById("desc-" + String(id))
	desc.classList.add("displayed")
}