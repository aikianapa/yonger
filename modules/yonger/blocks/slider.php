<view>
<section>
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <wb-foreach wb-count="3">
            <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
            <li class="{{_var.active}}" data-target="#my-carousel" data-slide-to="{{_idx}}" aria-current="location"></li>
        </wb-foreach>
        </ol>
        <div class="carousel-inner">
            <wb-foreach wb-count="3">
            <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
            <div class="carousel-item {{_var.active}}">
                <img class="d-block w-100" src="/thumb/800x500/src/null" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{_parent.header}}</h5>
                    <p>Text</p>
                </div>
            </div>
            </wb-foreach>
        </div> <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
</view>
<edit header="Слайдер">
    <wb-include wb-src="common.inc.php" />
</edit>