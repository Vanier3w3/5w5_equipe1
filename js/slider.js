(function(){
		let caroussel = document.querySelectorAll('.caroussel')
		let left = document.getElementById('prev')
		let right = document.getElementById('next')
		
		for(const elmCaroussel of caroussel){
				let index = 0;
				let maxIndex = caroussel.length-1;
				left.addEventListener('click', function(){
					if(index > 0){
						elmCaroussel.style.transform = 'translateX(' + (index*-100 + 100) + '%)';
						index--
						console.log(index)
					}
				})
				
				right.addEventListener('click', function(){
					if(index < maxIndex){
						elmCaroussel.style.transform = 'translateX(' + (index*-100 -100) + '%)'
						index++
						console.log(index)
					}
				})
			}
}())	