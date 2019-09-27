<section id="content2">
    <div class="line2 wrapper">
        <div class="wrapper">
            <article class="col1">
                <h2>{{isset($footer) ? $footer->title : ""}}</h2>
                <div class="wrapper">
                    <figure class="left marg_right1"><img src="{{isset($footer) ? $footer->image : '' }}" alt=""></figure>
                    <p>
                        @php echo isset($footer) ? $footer->description : ""; @endphp
                    </p>
                </div>
            </article>
            <article class="col3 pad_left1">
                <h2>soziale Suche</h2>
                <div class="pad" style="position:relative;">								
                    <div style="position:absolute; top:0px; left:0px; z-index:99999;"> 
                        <form method="get" action="http://www.google.com/search">
                            <div style="border:0px solid black;padding:4px;width:20em;">
                                <table border="0" cellpadding="0">
                                    <tr>
                                        <td>
                                            <input type="text"   name="q" size="25" maxlength="255" value=""/>
                                            <input type="submit" value="Suche" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div> 
                </div>
            </article>
        </div>
        <div class="wrapper buttons">
            <article class="col1">
                <a href="gallery.html" class="button">Fotos</a>
            </article>
            
        </div>
    </div>
</section>