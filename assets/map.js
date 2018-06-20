function initMap() {
                var uluru = {lat: 51.258859, lng: 22.574125};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: uluru
                });

                //MARKER AKADEMOS
                var contentString = '<div>Centrum Sportu Akademos, Symfoniczna 1</div>'

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var icon = {
                    karate: icons.markerIcon,
                    karate2: icons.karateIcon
                };


                var marker = new google.maps.Marker({
                    position: {lat: 51.269749, lng: 22.55599},
                    map: map,
                    icon: icon.karate2,
                    title: 'Centrum Sportu Akademos'
                });

                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });


                //MARKER SPORTSPARK
                var contentString2 = '<div>SPORTSpark, Bohaterów Monte Cassino 53A</div>'

                var infowindow2 = new google.maps.InfoWindow({
                    content: contentString2
                });

                var marker2 = new google.maps.Marker({
                    position: {lat: 51.245562, lng: 22.506234},
                    map: map,
                    icon: icon.karate2,
                    title: 'Sportspark'
                });

                marker2.addListener('click', function () {
                    infowindow2.open(map, marker2);
                });


                //MARKER CENTRUM SPOTKANIA KULTUR
                var contentString3 = '<div>Centrum Spotkania Kultur, Plac Teatralny 1</div>'

                var infowindow3 = new google.maps.InfoWindow({
                    content: contentString3
                });


                var marker3 = new google.maps.Marker({
                    position: {lat: 51.247155, lng: 22.548688},
                    map: map,
                    icon: icon.karate2,
                    title: 'Centrum Spotkania Kultur'
                });

                marker3.addListener('click', function () {
                    infowindow3.open(map, marker3);
                });


                //MARKER AQUA LUBLIN
                var contentString4 = '<div>AQUA Lublin, Aleje Zygmuntowskie 4</div>'

                var infowindow4 = new google.maps.InfoWindow({
                    content: contentString4
                });


                var marker4 = new google.maps.Marker({
                    position: {lat: 51.236875, lng: 22.568906},
                    map: map,
                    icon: icon.karate2,
                    title: 'AQUA Lublin'
                });

                marker4.addListener('click', function () {
                    infowindow4.open(map, marker4);
                });


                //MARKER FABRYKA OGÓLNEGO ROZWOJU
                var contentString5 = '<div>Fabryka Ogólnego Rozwoju, Mełgiewska 9E</div>'

                var infowindow5 = new google.maps.InfoWindow({
                    content: contentString5
                });


                var marker5 = new google.maps.Marker({
                    position: {lat: 51.244396, lng: 22.617938},
                    map: map,
                    icon: icon.karate2,
                    title: 'Fabryka Ogólnego Rozwoju'
                });

                marker5.addListener('click', function () {
                    infowindow5.open(map, marker5);
                });


                //MARKER SFERA
                var contentString6 = '<div>Sfera, Baltazara Paśnikowskiego 6</div>'

                var infowindow6 = new google.maps.InfoWindow({
                    content: contentString6
                });


                var marker6 = new google.maps.Marker({
                    position: {lat: 51.239995, lng: 22.495493},
                    map: map,
                    icon: icon.karate2,
                    title: 'Sfera'
                });

                marker6.addListener('click', function () {
                    infowindow6.open(map, marker6);
                });


                //MARKER MARYSIN
                var contentString7 = '<div>Marysin, ul. Ziemska</div>'

                var infowindow7 = new google.maps.InfoWindow({
                    content: contentString7
                });


                var marker7 = new google.maps.Marker({
                    position: {lat: 51.290993, lng: 22.495720},
                    map: map,
                    icon: icon.karate2,
                    title: 'Marysin'
                });

                marker7.addListener('click', function () {
                    infowindow7.open(map, marker7);
                });
            }

          