$( document ).ready(function() {

	var totalContacts = null;

	$.ajax({
        url: "/Contact/count",
        type: "GET",
		beforeSend: function(req) {
    		req.setRequestHeader("Accept", "application/json");
    	}
    }).done(function(response) {
    	totalContacts = response.count;
    	$("#loadGrid").attr("disabled", false);
    });

	$("#jsGrid").jsGrid({
	    width: "100%",
	    height: "500px",
		noDataContent: "Please click the button above to load contact list",

	    sorting: true,
	    paging: true,
		pageLoading: true,
        pageSize: 100,
        pageButtonCount: 10,
        
		controller: {
	        loadData: function(filter) {

	        	var ssFilter = {
	        		start: (filter.pageIndex-1) * filter.pageSize,
	        		limit: filter.pageSize,
	        		sort: filter.sortField,
	        		dir: filter.sortOrder
	        	};

	            return $.ajax({
	                type: "GET",
	                url: "/api/v1/Contact/",
	                data: ssFilter,
	                beforeSend: function(req) {
			    		req.setRequestHeader("Accept", "application/json");
			    	}
	            }).then(function(response) {
					return {
						data: response.items,
						itemsCount: totalContacts
					}
				});
	        }
	    },

	    fields: [
	    	{ name: "FirstName", type: "text", width: 30 },
			{ name: "LastName", type: "text", width: 30 },
			{ name: "Gender", type: "text", width: 20 },
			{ name: "Email", type: "text", width: 60,
				itemTemplate: function(value, item) {
					if (value == null) {
					    return;
					}
					return '<a href="mailto:'+value+'">' + value + '</a>';
				}
			},
			{ name: "Title", type: "text", width: 50 },
			{ name: "Company", type: "text", width: 40 },
			{ name: "Website", type: "text", width: 70, 
				itemTemplate: function(value, item) {
					if (value == null) {
					    return;
					}
					var shorturl = value.replace('http://', '').replace('https://', '').substr(0, 32);
					return '<a href="'+value+'" title="'+value+'" target="_blank">' + shorturl+'...' + '</a>';
				}
			},
			{ name: "City", type: "text", width: 40 },
			{ name: "IPAddress", title: "IP Address", type: "text", width: 40 }
	    ]
	});

	$("#loadGrid").click(function() {
  		$("#jsGrid").jsGrid("loadData");
  		$(this).attr("disabled", true);
	});
});
