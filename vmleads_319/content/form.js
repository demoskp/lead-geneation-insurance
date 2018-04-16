	var form_id = 'generate-319';
	var form_element = document.getElementById(form_id);
	var input_elements = form_element.getElementsByTagName('input');
	var textarea_elements = form_element.getElementsByTagName('textarea');
	var select_elements = form_element.getElementsByTagName('select');
	var initial_state = {"joint_application":{"id":112,"type":"radio","label":"Who is the cover for?","options":{"Just me":"Just me","Me and my partner":"Me and my partner"},"description":"","default":"Just me","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"insurance_type":{"id":105,"type":"select","label":"Type of insurance","options":{"Life Insurance only":"Life Insurance only","Life Insurance with Critical Illness":"Life Insurance with Critical Illness","Mortgage Life Insurance":"Mortgage Life Insurance","Whole of Life":"Whole of Life"},"description":"<strong>Life Insurance<\/strong> - The insured sum is paid out if you die during the term of the policy.\r\n\r\n<strong>Life Insurance with Critical Illness<\/strong> - As above but also pays out on diagnosis of certain medical conditions as laid out in the policy, i.e. heart attack, some cancers, stroke etc.\r\n\r\n<strong>Whole of Life<\/strong> - A plan that covers you for the rest of your life instead of a set term.\r\n\r\n<strong>Mortgage Life Insurance<\/strong> - The amount of cover reduces over the policy term, usually in line with your outstanding mortgage balance.","default":"Life Insurance only","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"cover_amount":{"id":106,"type":"select","label":"Amount of cover","options":{"10000":"\u00a310,000","15000":"\u00a315,000","20000":"\u00a320,000","25000":"\u00a325,000","30000":"\u00a330,000","35000":"\u00a335,000","40000":"\u00a340,000","45000":"\u00a345,000","50000":"\u00a350,000","55000":"\u00a355,000","60000":"\u00a360,000","65000":"\u00a365,000","70000":"\u00a370,000","75000":"\u00a375,000","80000":"\u00a380,000","85000":"\u00a385,000","90000":"\u00a390,000","95000":"\u00a395,000","100000":"\u00a3100,000","105000":"\u00a3105,000","110000":"\u00a3110,000","115000":"\u00a3115,000","120000":"\u00a3120,000","125000":"\u00a3125,000","130000":"\u00a3130,000","135000":"\u00a3135,000","140000":"\u00a3140,000","145000":"\u00a3145,000","150000":"\u00a3150,000","155000":"\u00a3155,000","160000":"\u00a3160,000","165000":"\u00a3165,000","170000":"\u00a3170,000","175000":"\u00a3175,000","180000":"\u00a3180,000","185000":"\u00a3185,000","190000":"\u00a3190,000","195000":"\u00a3195,000","200000":"\u00a3200,000","210000":"\u00a3210,000","220000":"\u00a3220,000","230000":"\u00a3230,000","240000":"\u00a3240,000","250000":"\u00a3250,000","260000":"\u00a3260,000","270000":"\u00a3270,000","280000":"\u00a3280,000","290000":"\u00a3290,000","300000":"\u00a3300,000","325000":"\u00a3325,000","350000":"\u00a3350,000","375000":"\u00a3375,000","400000":"\u00a3400,000","425000":"\u00a3425,000","450000":"\u00a3450,000","475000":"\u00a3475,000","500000":"\u00a3500,000","525000":"\u00a3525,000","550000":"\u00a3550,000","575000":"\u00a3575,000","600000":"\u00a3600,000","650000":"\u00a3650,000","700000":"\u00a3700,000","750000":"\u00a3750,000","800000":"\u00a3800,000","850000":"\u00a3850,000","900000":"\u00a3900,000","950000":"\u00a3950,000","1000000":"\u00a31,000,000","1100000":"\u00a31,100,000","1200000":"\u00a31,200,000","1300000":"\u00a31,300,000","1400000":"\u00a31,400,000","1500000":"\u00a31,500,000"},"description":"Choose an amount that reflects your financial needs in the event of a claim. For instance you might want to pay off a mortgage or debts, or leave a lump sum to your family.","default":"100000","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"cover_length":{"id":107,"type":"select","label":"Length of cover","options":{"1":"1 year","2":"2 years","3":"3 years","4":"4 years","5":"5 years","6":"6 years","7":"7 years","8":"8 years","9":"9 years","10":"10 years","11":"11 years","12":"12 years","13":"13 years","14":"14 years","15":"15 years","16":"16 years","17":"17 years","18":"18 years","19":"19 years","20":"20 years","21":"21 years","22":"22 years","23":"23 years","24":"24 years","25":"25 years","26":"26 years","27":"27 years","28":"28 years","29":"29 years","30":"30 years","31":"31 years","32":"32 years","33":"33 years","34":"34 years","35":"35 years","36":"36 years","37":"37 years","38":"38 years","39":"39 years","40":"40 years","41":"41 years","42":"42 years","43":"43 years","44":"44 years","45":"45 years","46":"46 years","47":"47 years","48":"48 years","49":"49 years","50":"50 years"},"description":"Choose a policy term (the number of years you will be protected by the policy). This should align with your financial obligations and needs.","default":"20","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"first_name":{"id":97,"type":"text","label":"First name","options":[],"description":"","default":"","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":30},"last_name":{"id":98,"type":"text","label":"Last name","options":[],"description":"","default":"","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":30},"address_line_1":{"id":108,"type":"text","label":"Address line 1","options":[],"description":"","default":"","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":80},"postcode":{"id":102,"type":"text","label":"Postcode","options":[],"description":"","default":"","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":8},"dob":{"id":103,"type":"date-3","label":"Date of birth","options":[],"description":"Your age is one of the factors used to calculate your premium. You must be aged between 18 and 80.","default":"01-01-1970","fieldset":"","required":1,"hidden":0,"year_range":"1936,1998","max_length":null},"smoker":{"id":109,"type":"radio","label":"Have you smoked in the last 12 months?","options":{"No":"No","Yes":"Yes"},"description":"This includes cigarettes, cigars, pipe using, or other tobacco products including nicotine replacements and e-cigarettes.","default":"No","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"telephone":{"id":100,"type":"text","label":"Telephone number 1","options":[],"description":"","default":"","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"mobile":{"id":101,"type":"text","label":"Telephone number 2","options":[],"description":"","default":"","fieldset":"","required":0,"hidden":0,"year_range":"","max_length":null},"email":{"id":99,"type":"text","label":"Email","options":[],"description":"","default":"","fieldset":"","required":1,"hidden":0,"year_range":"","max_length":null},"affiliate_campaign_id":{"id":"","type":"hidden"}};
	for(var i=0;i<input_elements.length;i++){
		~function(el){
			apply_rules(el);
			if(el.type != 'radio' && el.type != 'checkbox'){
				bindEvent(el,'change',event_apply_rules);
			}else{
				bindEvent(el,'click',function(){
					apply_rules(el);
				});
			}
		}(input_elements[i]);
	}
	for(var i=0;i<textarea_elements.length;i++){
		~function(el){
			apply_rules(el);
			bindEvent(el,'change',event_apply_rules);
		}(textarea_elements[i]);
	}
	for(var i=0;i<select_elements.length;i++){
		~function(el){
			apply_rules(el);
			bindEvent(el,'change',event_apply_rules);
		}(select_elements[i]);
	}
	bindEvent(form_element, 'submit', function(){
		for(var i=0;i<input_elements.length;i++){
			if(input_elements[i].type == 'submit'){
				input_elements[i].disabled = 'disabled';
			}
		}
		//Gif
		var items = form_element.parentElement.children;
		for(var i = 0; i < items.length; i++){
			if(items[i].className != 'hideloading'){
				items[i].style.visibility = 'hidden';
			}else{
				items[i].style.display = 'block';
			}
		}
	});

	function apply_rules( e ){
		// get all rules
		var rules = [];
		var key = e.name;
		var type = e.type;

		//get current_rules
		var i;
		for( i in rules ){
			var single_rule = rules[i];
			if( single_rule.key == key || (single_rule.key  + '[]' == key)){
				if(type == 'radio'){
					var elements = document.getElementsByName(key);
					for(var j=0;j<elements.length;j++){
						if(elements[j].checked){
							var value = elements[j].value;
							break;
						}
					}
				}else if(type == 'checkbox'){
					var elements = document.getElementsByName(key);
					var value = [];
					for(var j=0;j<elements.length;j++){
						if(elements[j].checked){
							value.push(elements[j].value);
						}
					}
				}else{
					var value = e.value;
				}
				apply_rule( single_rule,value,initial_state );
			}
		}
	}

	function event_apply_rules(  ){
		apply_rules(this);
	}

	function apply_rule( single_rule,value,initial_state ){
		var rule_method = single_rule.rule_method;
		var rule_value = single_rule.rule_value;
		var set_field = single_rule.then_campaign_field;
		var required = single_rule.required;
		var hidden = single_rule.hidden;

		if( check_condition(rule_method,value,rule_value) ){
			set_element_class(required,hidden,set_field);
		}else{
			var initial_required = initial_state[set_field].required;
			var initial_hidden = initial_state[set_field].hidden;
			set_element_class(initial_required,initial_hidden,set_field);
		}
	}

	function check_condition(rule_method,value,rule_value){
		switch(rule_method){
			case 'Equal':
				return (value==rule_value);
			case 'Match':
				return (value.match(rule_value));
			case 'Great Than':
				return (value>rule_value);
			case 'Less Than':
				return (value<rule_value);
			case 'Contain':
				return (value.indexOf(rule_value) !== -1);
			case 'In':
				return (rule_value.indexOf(value) !== -1);
		}
	}

	function set_element_class(required,hidden,set_field){
		var element_id = 'field_'+set_field;
		var edit_element = document.getElementById(element_id);
		var class_name = edit_element.className;
		if(required){
			if(!class_name.match(/required/)) class_name += ' required';
		}else{
			class_name = class_name.replace('required','');
		}
		if(hidden){
			if(!class_name.match(/hidden/)) class_name += ' hidden';
		}else{
			class_name = class_name.replace('hidden','');
		}
		edit_element.className = class_name;
	}

	function bindEvent(element, type, handler) {
	   if(element.addEventListener) {
	      element.addEventListener(type, handler, false);
	   } else {
	      element.attachEvent('on'+type, handler);
	   }
	}

	if(typeof document.getElementsByClassName != 'undefined'){
		var tpms = document.getElementsByClassName('tooltipmark');
	}else if(typeof document.querySelectorAll != 'undefined'){
		var tpms = document.querySelectorAll('.tooltipmark');
	}else{
		var tpms = [];
		var re = new RegExp('(^| )tooltipmark( |$)');
		var els = form_element.getElementsByTagName("*");
		for(var i=0,j=els.length; i<j; i++)
			if(re.test(els[i].className))tpms.push(els[i]);
	}
	for(i = 0; i < tpms.length; i++){
		~function(em){
			bindEvent(em, 'mouseover', function(){
				var id = em.parentNode.parentNode.id.replace('field_','');
				var description = initial_state[id].description.replace(/(\r\n|\n\r|\r|\n)/g, '<br>');
				tooltip.show(description);
			})
			bindEvent(em, 'mouseout', function(){
				tooltip.hide();
			})
		}(tpms[i])
	}


	if(typeof document.getElementsByClassName != 'undefined'){
		var ds = document.getElementsByClassName('date-1');
	}else if(typeof document.querySelectorAll != 'undefined'){
		var ds = document.querySelectorAll('.date-1');
	}else{
		var ds = [];
		var re = new RegExp('(^| )date-1( |$)');
		var els = form_element.getElementsByTagName("*");
		for(var i=0,j=els.length; i<j; i++)
			if(re.test(els[i].className))ds.push(els[i]);
	}

	for(i = 0; i < ds.length; i++){
		~function(div){
			var el = div.getElementsByTagName('input')[0]
			var year_from = el.getAttribute('data-year-from');
			var year_to = el.getAttribute('data-year-to');
			var defaultDate = new Date(Date.parse('01-01-'+year_to));
			var picker = new Pikaday({
				field: el,
				format: 'DD-MM-YYYY',
				yearRange: [year_from, year_to],
				defaultDate: defaultDate
			});
		}(ds[i])
	}
