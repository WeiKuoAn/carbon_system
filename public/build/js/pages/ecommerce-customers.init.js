/*
Template Name: webadmin - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.com/
Contact: Themesdesign@gmail.com
File: Ecommerce customers Js File
*/

// Basic Table
new gridjs.Grid({
  columns:
    [
      {
        name: '#',
        sort: {
          enabled: false
      },
        formatter: (function (cell) {
          return gridjs.html('<div class="form-check font-size-16"><input class="form-check-input" type="checkbox" id="orderidcheck01"><label class="form-check-label" for="orderidcheck01"></label></div>');
        })
      },

      {
        name: 'Username',
        formatter: (function (cell) {
          return gridjs.html('<img src="build/images/users/'+ cell[0]+'" alt="" class="avatar-sm rounded-circle me-2" /><a href="#" class="text-body">' + cell[1] + "</a>");
        })
      },
      {
        name: 'Phone / Email',
        formatter: (function (cell) {
          return gridjs.html('<p class="mb-1">'+ cell[0] +'</p><p class="mb-0">'+ cell[1] +'</p>');
        })
      },
      
      , "Address",

      {
        name: "Rating",
        formatter: (function (cell) {
          return gridjs.html('<span class="badge bg-success font-size-12"><i class="mdi mdi-star me-1"></i>' + cell +'</span>');
        })
      },
      
      "Wallet Balance", "Joining Date",
      {
        name: "Action",
        sort: {
          enabled: false
      },
        formatter: (function (cell) {
          return gridjs.html('<div class="dropdown"><a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal font-size-18"></i></a><ul class="dropdown-menu dropdown-menu-end"><li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li><li><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li></ul></div>');
        })
      }
    ],
  pagination: {
    limit: 6
  },
  sort: true,
  search: true,
  data: [
    ["", ["avatar-1.jpg","Stephen Rash"],  ["325-250-1106", "StephenRash@teleworm.us"], "2470 Grove Street Bethpage, NY 11714",         "4.2", "$5,412", "07 Oct, 2021" ],
    ["", ["avatar-2.jpg","Juan Mays"],     ["443-523-4726", "JuanMays@armyspy.com"], "3755 Harron Drive Salisbury, MD 21875",        "4.3", "$5,632", "06 Oct, 2021"],
    ["", ["avatar-3.jpg","Scott Henry"],   ["704-629-9535", "ScottHenry@jourrapide.com"], "3632 Snyder Avenue Bessemer City, NC 28016",   "4.1", "$7,523", "06 Oct, 2021"],
    ["", ["avatar-4.jpg","Cody Menendez"], ["701-832-5838", "CodyMenendez@armyspy.com"], "4401 Findley Avenue Minot, ND 58701",          "4.0", "$6,325", "05 Oct, 2021"],
    ["", ["avatar-5.jpg","Jason Merino"],  ["706-219-4095", "JasonMerino@dayrep.com"], "3159 Holly Street Cleveland, GA 30528",        "4.2", "$4,523", "04 Oct, 2021" ],
    ["", ["avatar-6.jpg","Kyle Aquino"],   ["415-232-5443", "KyleAquino@teleworm.us"], "4861 Delaware Avenue San Francisco, CA 94143", "4.1", "$5,412", "03 Oct, 2021"],
    ["", ["avatar-7.jpg","David Gaul"],    ["314-483-4679", "DavidGaul@teleworm.us"], "1207 Cottrill Lane Stlouis, MO 63101",         "4.4", "$5,412", "02 Oct, 2021"],
    ["", ["avatar-8.jpg","John McCray"],   ["253-661-7551", "JohnMcCray@armyspy.com"], "3309 Horizon Circle Tacoma, WA 98423",         "3.2", "$5,287", "02 Oct, 2021"],
    ["", ["avatar-1.jpg","John Fane"],  ["325-250-1106", "StephenRash@teleworm.us"], "2470 Grove Street Bethpage, NY 11714",         "4.2", "$5,412", "07 Oct, 2021" ],
    ["", ["avatar-2.jpg","Stacie Parker"],     ["443-523-4726", "JuanMays@armyspy.com"], "3755 Harron Drive Salisbury, MD 21875",        "4.3", "$5,632", "06 Oct, 2021"],
    ["", ["avatar-3.jpg","Betty Wilson"],   ["704-629-9535", "ScottHenry@jourrapide.com"], "3632 Snyder Avenue Bessemer City, NC 28016",   "4.1", "$7,523", "06 Oct, 2021"],
    ["", ["avatar-4.jpg","Roman Crabtree"], ["701-832-5838", "CodyMenendez@armyspy.com"], "4401 Findley Avenue Minot, ND 58701",          "4.0", "$6,325", "05 Oct, 2021"],
    ["", ["avatar-5.jpg","Marisela Butler"],  ["706-219-4095", "JasonMerino@dayrep.com"], "3159 Holly Street Cleveland, GA 30528",        "4.2", "$4,523", "04 Oct, 2021" ],
    ["", ["avatar-6.jpg","Roger Slayton"],   ["415-232-5443", "KyleAquino@teleworm.us"], "4861 Delaware Avenue San Francisco, CA 94143", "4.1", "$5,412", "03 Oct, 2021"],
    ["", ["avatar-7.jpg","Barbara Torres"],    ["314-483-4679", "DavidGaul@teleworm.us"], "1207 Cottrill Lane Stlouis, MO 63101",         "4.4", "$5,412", "02 Oct, 2021"],
    ["", ["avatar-8.jpg","Daniel Rigney"],   ["253-661-7551", "JohnMcCray@armyspy.com"], "3309 Horizon Circle Tacoma, WA 98423",         "3.2", "$5,287", "02 Oct, 2021"],

  ]
}).render(document.getElementById("table-ecommerce-customers"));


flatpickr('#customers-date', {
  defaultDate: new Date(),
  dateFormat: "d M, Y",
});
