
<h3>Sol Pieles, SRL</h3>
<p>					        
    @if ($lang->lang == 'en')
    	Calle # 3, Residential Lily, Apt. 4-C<br>Santiago, Dominican Republic<br>
    @else
    	Calle # 3, Residencial Lily, Apt. 4-C<br>Santiago, República Dominicana<br> 
    @endif 
</p>
<p><i class="fa fa-phone"></i> 
    <abbr title="Phone">P</abbr>: 1+(809) 867 9170</p>
    <abbr title="Phone 2">P</abbr>: 1+(809) 850 2371</p>
    <abbr title="Phone 2">P</abbr>: 1+(809) 724 4683</p>
    <abbr title="Fax">F</abbr>: 1+(809) 724 3939</p>
<p><i class="fa fa-envelope-o"></i> 
    <abbr title="Email">E</abbr>: 
    <a href="mailto:cperchaz@hotmail.com" target="_new">cperchaz@hotmail.com</a>
</p>
<p><i class="fa fa-clock-o"></i> 
    <abbr title="Hours">H</abbr>
    @if ($lang->lang == 'en')
    	: Every day, 24 / 7
    @else
    	: Todos los días, 24 / 7 
    @endif 
</p>
    {{-- <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p> --}}
<ul class="list-unstyled list-inline list-social-icons">
    <li>
        @include('layouts.partials-website.social-links-square.facebook')
    </li>
    <li>
        @include('layouts.partials-website.social-links-square.twitter')
    </li>
    <li>
        @include('layouts.partials-website.social-links-square.whatsapp')
    </li>
    <li>
        @include('layouts.partials-website.social-links-square.email')
    </li>
</ul>