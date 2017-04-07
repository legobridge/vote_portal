<h1> Sports Secretary (Girls) </h1>
<form action="sportssec.php" method="post">
    <div class="radio">
	    <div class="opt">
            <label><input type="radio" name="vote" value="Aastha Singh">Aastha Singh</label>
        </div>
	    <div class="opt">
            <label><input type="radio" name="vote" value="Mahak Parwana">Mahak Parwana</label>
        </div>
	    <div class="opt">
            <label><input type="radio" name="vote" value="NotA (Girls)">NotA</label>
        </div>
    </div>
    <div>
        <span>
            <button class="btn btn-default" onclick="goBack()">
                <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                Back
            </button>
        </span>
        <div class="radio">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                Next
            </button>
        </div>
    </div>
</form>