<?php
/**
 * User: chipwasson
 * Date: 2/25/17
 * Time: 10:02 PM
 */

?>
<h2>Blockchain-Based Paste Bin</h2>
<form action="/save.php" method="post">
    <textarea name="data" style="width:100%;" rows="20"></textarea>
    <button type="submit" value="Save">Save</button>
</form>
<p>This is a blockchain based paste bin as a proof of concept for a distributed system. The text entered above is split into
chunks and added to a blockchain stream. Then reassembled based on a randomly generated key. Anyone can join the pool by installing <a href="http://www.multichain.com/">MultiChain</a>
and running:<br/><pre>multichaind pastechain@1.pastechain.nerds.io:2693</pre><br/>or<pre>multichaind pastechain@2.pastechain.nerds.io:2693</pre><br/></p>

<p>You can explore the blockchain that powers this paste bin by heading over to the <a href="http://explore.pastechain.nerds.io/">
        pastechain blockchain explorer
    </a> to look directly at the production stream <a href="http://explore.pastechain.nerds.io/pastechain/stream/prod">
        click here
    </a>.</p>
<p>For extra fun try viewing your paste at <pre>https://2.pastechain.nerds.io/{key}</pre>.</p>

<p>Acknowledgements:<br/>This system uses a modified version of libphp-multichain which is Copyright (c) 2015 Roderik van der Veer</p>