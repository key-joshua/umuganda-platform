function PROVINCEs(s1,s2)
		{
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);

			s2.innerHTML= "";



			if (s1.value =="Kigali City") 
			{
				var optionArray =["|---select---","Gasabo|Gasabo","Kicukiro|Kicukiro","Nyarugenge|Nyarugenge"];
			}



			else if (s1.value =="Northern") 
			{
				var optionArray =["|---select---","Burera|Burera","Gakenke|Gakenke","Gicumbi|Gicumbi","Musanze|Musanze","Rulindo|Rulindo"];
			}



			else if (s1.value =="Southern") 
			{
				var optionArray =["|---select---","Gisagara|Gisagara","Huye|Huye","Kamonyi|Kamonyi","Muhanga|Muhanga","Nyamagabe|Nyamagabe","Nyanza|Nyanza","Nyaruguru|Nyaruguru","Ruhango|Ruhango"];
			}



			else if (s1.value =="Eastern") 
			{
				var optionArray =["|---select---","Bugesera|Bugesera","Gatsibo|Gatsibo","Kayonza|Kayonza","Kirehe|Kirehe","Ngoma|Ngoma","Nyagatare|Nyagatare","Rwamagana|Rwamagana"];
			}



			else if (s1.value =="Western") 
			{
				var optionArray =["|---select---","Karongi|Karongi","Ngororero|Ngororero","Nyabihu|Nyabihu","Nyamasheke|Nyamasheke","Rubavu|Rubavu","Rusizi|Rusizi","Rutsiro|Rutsiro"];
			}



			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value=pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);	

			}		
		}

		function DISTRICTs(s2,s3)
		{
			var s2 = document.getElementById(s2);
			var s3 = document.getElementById(s3);
			s3.innerHTML= "";



			if (s2.value =="Gasabo") 
			{
				var optionArray =["|---select---","Kimironko|Kimironko","Ndera|Ndera","Rusororo|Rusororo"];
			}

			else if (s2.value =="Kicukiro") 
			{
				var optionArray =["|---select---","Kanombe|Kanombe","Masaka|Masaka","Kicukiro|Kicukiro"];
			}



			

			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value=pair[0];
				newoption.innerHTML=pair[1];
				s3.options.add(newoption);	

			}		
		}

		function SECTORs(s3,s4)
		{
			var s3 = document.getElementById(s3);
			var s4 = document.getElementById(s4);
			s4.innerHTML= "";



			if (s3.value =="Kimironko") 
			{
				var optionArray =["|---select---","Nyagatovu|Nyagatovu","Kibagabaga|Kibagabaga","Bibare|Bibare"];
			}

			else if (s3.value =="Rusororo") 
			{
				var optionArray =["|---select---","Kabuga I|Kabuga I","Kabuga II|Kabuga II","Nyagahinga|Nyagahinga"];
			}



			

			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value=pair[0];
				newoption.innerHTML=pair[1];
				s4.options.add(newoption);	

			}		
		}


		function CELLs(s4,s5)
		{
			var s4 = document.getElementById(s4);
			var s5 = document.getElementById(s5);
			s5.innerHTML= "";



			if (s4.value =="Nyagatovu") 
			{
				var optionArray =["|---select---","Ituze|Ituze","Ingamba|Ingamba","Rugari|Rugari"];
			}

			else if (s4.value =="Kabuga I") 
			{
				var optionArray =["|---select---","Kalismbi|Kalismbi I","Gahoromani|Gahoromani","Bwiza|Bwiza"];
			}



			

			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value=pair[0];
				newoption.innerHTML=pair[1];
				s5.options.add(newoption);	

			}		
		}