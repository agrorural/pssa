YUI.add("moodle-availability_grouping-form",function(e,t){M.availability_grouping=M.availability_grouping||{},M.availability_grouping.form=e.Object(M.core_availability.plugin),M.availability_grouping.form.groupings=null,M.availability_grouping.form.initInner=function(e){this.groupings=e},M.availability_grouping.form.getNode=function(t){var n="<label>"+M.util.get_string("title","availability_grouping")+' <span class="availability-group">'+'<select name="id">'+'<option value="choose">'+M.util.get_string("choosedots","moodle")+"</option>";for(var r=0;r<this.groupings.length;r++){var i=this.groupings[r];n+='<option value="'+i.id+'">'+i.name+"</option>"}n+="</select></span></label>";var s=e.Node.create("<span>"+n+"</span>");t.id!==undefined&&s.one("select[name=id] > option[value="+t.id+"]")&&s.one("select[name=id]").set("value",""+t.id);if(!M.availability_grouping.form.addedEvents){M.availability_grouping.form.addedEvents=!0;var o=e.one(".availability-field");o.delegate("change",function(){M.core_availability.form.update()},".availability_grouping select")}return s},M.availability_grouping.form.fillValue=function(e,t){var n=t.one("select[name=id]").get("value");n==="choose"?e.id="choose":e.id=parseInt(n,10)},M.availability_grouping.form.fillErrors=function(e,t){var n={};this.fillValue(n,t),n.id==="choose"&&e.push("availability_grouping:error_selectgrouping")}},"@VERSION@",{requires:["base","node","event","moodle-core_availability-form"]});
