function ProjectCollection(){
	
	this.projects = new Array();
	
	this.getProjectCoverData = function(){
		
		$.get('php/getProjects.php', function(data){
			$($.parseJSON(data)).each(function(){
				console.log(this.nameProject);
			});
		});
	}
	
	//addProject()
	
	this.addProject= function(){
		
		//project object
		
		this.projects.push();
	}
	
	this.sayHello = function(){
		alert("oii");
	}
	
	this.getProjectCoverData();
}