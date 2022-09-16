<div class="content">
    <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><i class="fa fa-{{$c->icon}}"></i> {{e2($c->title)}} Management</h3>
            </div>
            <div class="block-content">
                <?php if(getisset("add")) {
                    ekle([
                        
                    ],"newsletter");
                    yonlendir("?addok");
                } ?>
                <a href="?add" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                        </tr>
                        <?php $list = db("newsletter")->orderBy("id","desc")->simplePaginate(100); 
                        foreach($list AS $l)  { 
                         
                         ?>
                         <tr>
                             <td>
                                <input type="text" name="title" value="{{$l->title}}" table="newsletter" id="{{$l->id}}" class="form-control edit">
                             </td>
                         </tr> 
                         <?php } ?>
                    </table>
                </div>
            </div>

            

        </div>

    </div>
</div>