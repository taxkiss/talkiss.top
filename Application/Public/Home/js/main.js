/**
 * 
 */
function swap(val){
	if(val=="frist"){
		frist.style.display='block';
		second.style.display='none';
		third.style.display='none';
		fourth.style.display='none';
	}else if(val=="second"){
		frist.style.display='none';
		second.style.display='block';
		third.style.display='none';
		fourth.style.display='none';
	}else if(val=="third"){
		frist.style.display='none';
		second.style.display='none';
		third.style.display='block';
		fourth.style.display='none';
	}else if(val=="fourth"){
		frist.style.display='none';
		second.style.display='none';
		third.style.display='none';
		fourth.style.display='block';
	}
}