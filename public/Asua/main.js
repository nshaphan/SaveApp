$("#btnSaveGroup").click(function(e){
	e.preventDefault();
	registerGroup();
})
$("#btnSaveProducts").click(function(e){
	e.preventDefault();
	registerProducts();
})
$("#btnSaveMoney").click(function(e){
	e.preventDefault();
	registerSaving();
})
$("#btnSaveWithdraw").click(function(e){
	e.preventDefault();
	registerWithdraw();
})
$("#btnSaveMember").click(function(e){
	e.preventDefault();
	registerGroupMembers();
})
$("#btnSaveConfigurations").click(function(e){
	e.preventDefault();
	registerIdea();
})
$("#btnSaveIdea").click(function(e){
	e.preventDefault();
	registerIdea();
})
$("#btnSaveFundingProjects").click(function(e){
	e.preventDefault();
	registerFundingProjects();
})
$("#btnAddFund").click(function(e){
	e.preventDefault();
	addFunds();
})
function autoLoad(){
	var url=document.URL;
	switch(url){
		case'http://localhost:8000/':
		loadGroup('setContent');
	}
}
autoLoad();