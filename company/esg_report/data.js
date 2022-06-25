// 이전글, 다음글이 필요한 카테고리 위치에 넣어둠
function data() {
	this.addArticle = addArticle;

	this.artIds = new Array();
	this.artTitles = new Array();
	this.artTimes = new Array();

	this.addArticle("1232148", "2020/21 NEXEN TIRE ESG Report", "2021.10.07");
	this.addArticle("1224879", "2019/20 NEXEN TIRE ESG Report", "2020.08.10");
	this.addArticle("1224878", "2019/20 ESG third-party verification(Eng)", "2020.08.10");
	
}

function addArticle(id, title, time) {
	this.artIds.push(id);
	this.artTitles.push(title);
	this.artTimes.push(time);
}

function nowList(artIndex) {
nowPage = Math.ceil((1 - artIndex+1) / 10); 

if (nowPage==1)
	{
		location.replace("/international/company/esg_report/index.php");
	}else{
		location.replace("/international/company/esg_report/index.php"+",1,list,"+nowPage+".html");
	}
}