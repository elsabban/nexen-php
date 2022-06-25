// js 위치에 있으며 공통으로 부름
function jsList() {
	this.init = init;
	this.getUrl = getUrl;
	this.getPrev = getPrev;
	this.getNext = getNext;

	this.catId;
	this.artId;
	this.tplId;
	this.artIndex;

	this.pageHref = self.location.href;
	this.pageURL = "";

	this.artIds = new Array();
	this.artTitles = new Array();
	this.artTimes = new Array();
}

function init(catId, artId, tplId, data) {

	this.artIds = data.artIds;
	this.artTitles = data.artTitles;
	this.artTimes = data.artTimes;

	this.catId = catId;
	this.artId = artId;
	this.tplId = tplId;

	try {
		if ( this.pageHref.indexOf('?') >=0 ) { 
			this.pageURL = this.pageHref.substring(0, this.pageHref.indexOf('?'));
		}
		else {
			this.pageURL = this.pageHref;
		}
	}
	catch(e) {
		this.pageURL = '';
	}

	for (var i=0; i<this.artIds.length; i++) {
		if (artId == this.artIds[i]) {
			this.artIndex = i;
			break;
		}
	}
}


function getUrl(idx) {
	var url;

	

	
	url = this.pageHref.substring(0, this.pageHref.lastIndexOf("/"))+"/"+this.artIds[idx]+"_"+this.tplId
		+this.pageHref.substring(this.pageHref.lastIndexOf("."));
	

	return url;
}

function getNext() {
	if (this.artIndex != this.artIds.length-1) {
		document.write("<a href="+this.getUrl(this.artIndex+1)+">"+this.artTitles[this.artIndex+1]+"</a>");
	} else {
		document.write("No previous posts.");
	}
}

function getPrev() {
	if (this.artIndex != 0) {
		document.write("<a href="+this.getUrl(this.artIndex-1)+">"+this.artTitles[this.artIndex-1]+"</a>");
	} else {
		document.write("There is no next article.");
	}
}