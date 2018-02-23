var dev_data;
dev_data =$.get("dev",
    function (data) {
        dev_data = data;
    }, "json");

// dev_data = [{"site": "www.belarusbank.by"},
//   {"site": "www.belapb.by"},
//   {"site": "www.tb.by"},
//   {"site": "www.vtb-bank.by"},
//   {"site": "www.bnb.by"},
//   {"site": "www.bps-sberbank.by"},
//   {"site": "www.priorbank.by"},
//   {"site": "www.mtbank.by"},
//   {"site": "www.belinvestbank.by"},
//   {"site": "www.belveb.by"},
//   {"site": "www.belgazprombank.by"},
//   {"site": "www.bsb.by"},
//   {"site": "www.fransabank.by"},
//   {"site": "www.stbank.by"},
//   {"site": "www.alfa-bank.by"},
//   {"site": "www.btabank.by"},
//   {"site": "www.rrb.by"},
//   {"site": "www.ideabank.by"},
//   {"site": "www.rbank.by"},
//   {"site": "www.absolutbank.by"},
//   {"site": "www.zepterbank.by"},
//   {"site": "www.tcbank.by"},
//   {"site": "www.hbank.by"},
//   {"site": "www.mmbank.by"},
//   {"site": "www.paritetbank.by"}];