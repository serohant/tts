<form id="form" onsubmit="return false;">
    <input type="text" id="userInput" placeholder="text to read" required="" />
    <br>
    <select id="voiceselection">
    <option disabled="disabled" selected="selected">Please select which langueage to read</option>
    <option value="UK English Female">UK English Female</option>
    <option value="UK English Male">UK English Male</option>
    <option value="US English Female">US English Female</option>
    <option value="US English Male">US English Male</option>
    <option value="Arabic Male">Arabic Male</option>
    <option value="Arabic Female">Arabic Female</option>
    <option value="Armenian Male">Armenian Male</option>
    <option value="Australian Female">Australian Female</option>
    <option value="Australian Male">Australian Male</option>
    <option value="Bangla Bangladesh Female">Bangla Bangladesh Female</option>
    <option value="Bangla Bangladesh Male">Bangla Bangladesh Male</option>
    <option value="Bangla India Female">Bangla India Female</option>
    <option value="Bangla India Male">Bangla India Male</option>
    <option value="Brazilian Portuguese Female">Brazilian Portuguese Female</option>
    <option value="Brazilian Portuguese Male">Brazilian Portuguese Male</option>
    <option value="Chinese Female">Chinese Female</option>
    <option value="Chinese Male">Chinese Male</option>
    <option value="Chinese (Hong Kong) Female">Chinese (Hong Kong) Female</option>
    <option value="Chinese (Hong Kong) Male">Chinese (Hong Kong) Male</option>
    <option value="Chinese Taiwan Female">Chinese Taiwan Female</option>
    <option value="Chinese Taiwan Male">Chinese Taiwan Male</option>
    <option value="Czech Female">Czech Female</option>
    <option value="Czech Male">Czech Male</option>
    <option value="Danish Female">Danish Female</option>
    <option value="Danish Male">Danish Male</option>
    <option value="Deutsch Female">Deutsch Female</option>
    <option value="Deutsch Male">Deutsch Male</option>
    <option value="Dutch Female">Dutch Female</option>
    <option value="Dutch Male">Dutch Male</option>
    <option value="Estonian Male">Estonian Male</option>
    <option value="Filipino Female">Filipino Female</option>
    <option value="Finnish Female">Finnish Female</option>
    <option value="Finnish Male">Finnish Male</option>
    <option value="French Female">French Female</option>
    <option value="French Male">French Male</option>
    <option value="French Canadian Female">French Canadian Female</option>
    <option value="French Canadian Male">French Canadian Male</option>
    <option value="Greek Female">Greek Female</option>
    <option value="Greek Male">Greek Male</option>
    <option value="Hindi Female">Hindi Female</option>
    <option value="Hindi Male">Hindi Male</option>
    <option value="Hungarian Female">Hungarian Female</option>
    <option value="Hungarian Male">Hungarian Male</option>
    <option value="Indonesian Female">Indonesian Female</option>
    <option value="Indonesian Male">Indonesian Male</option>
    <option value="Italian Female">Italian Female</option>
    <option value="Italian Male">Italian Male</option>
    <option value="Japanese Female">Japanese Female</option>
    <option value="Japanese Male">Japanese Male</option>
    <option value="Korean Female">Korean Female</option>
    <option value="Korean Male">Korean Male</option>
    <option value="Latin Female">Latin Female</option>
    <option value="Latin Male">Latin Male</option>
    <option value="Nepali">Nepali</option>
    <option value="Norwegian Female">Norwegian Female</option>
    <option value="Norwegian Male">Norwegian Male</option>
    <option value="Polish Female">Polish Female</option>
    <option value="Polish Male">Polish Male</option>
    <option value="Portuguese Female">Portuguese Female</option>
    <option value="Portuguese Male">Portuguese Male</option>
    <option value="Romanian Female">Romanian Female</option>
    <option value="Russian Female">Russian Female</option>
    <option value="Russian Male">Russian Male</option>
    <option value="Sinhala">Sinhala</option>
    <option value="Slovak Female">Slovak Female</option>
    <option value="Slovak Male">Slovak Male</option>
    <option value="Spanish Female">Spanish Female</option>
    <option value="Spanish Male">Spanish Male</option>
    <option value="Spanish Latin American Female">Spanish Latin American Female</option>
    <option value="Spanish Latin American Male">Spanish Latin American Male</option>
    <option value="Swedish Female">Swedish Female</option>
    <option value="Swedish Male">Swedish Male</option>
    <option value="Tamil Female">Tamil Female</option>
    <option value="Tamil Male">Tamil Male</option>
    <option value="Thai Female">Thai Female</option>
    <option value="Thai Male">Thai Male</option>
    <option value="Turkish Female">Turkish Female</option>
    <option value="Turkish Male">Turkish Male</option>
    <option value="Ukrainian Female">Ukrainian Female</option>
    <option value="Vietnamese Female">Vietnamese Female</option>
    <option value="Vietnamese Male">Vietnamese Male</option>
    <option value="Afrikaans Male">Afrikaans Male</option>
    <option value="Albanian Male">Albanian Male</option>
    <option value="Bosnian Male">Bosnian Male</option>
    <option value="Catalan Male">Catalan Male</option>
    <option value="Croatian Male">Croatian Male</option>
    <option value="Esperanto Male">Esperanto Male</option>
    <option value="Icelandic Male">Icelandic Male</option>
    <option value="Latvian Male">Latvian Male</option>
    <option value="Macedonian Male">Macedonian Male</option>
    <option value="Moldavian Female">Moldavian Female</option>
    <option value="Moldavian Male">Moldavian Male</option>
    <option value="Montenegrin Male">Montenegrin Male</option>
    <option value="Serbian Male">Serbian Male</option>
    <option value="Serbo-Croatian Male">Serbo-Croatian Male</option>
    <option value="Swahili Male">Swahili Male</option>
    <option value="Welsh Male">Welsh Male</option>
    <option value="Fallback UK Female">Fallback UK Female</option>
</select>
<br>
    <input type="submit" onclick="othername();" />
</form>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=hvLgSF5h"></script>
<script>
    function othername() {
        var input = document.getElementById("userInput").value;
        var e = document.getElementById("voiceselection");
        var strUser = e.options[e.selectedIndex].value;
        responsiveVoice.cancel()
        responsiveVoice.speak(input,strUser)

    }
</script>
