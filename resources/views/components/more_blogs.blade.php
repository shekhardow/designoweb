<div class="col-sm-4">
    <div class="blogListBox blogListBoxNew boxs">
        <div class="blogContentTop boxs">
            <div class="blogImage boxs">
                <span class="boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $blog->slug]); ?>"><img src="<?php echo !empty($blog->image_url) ? url('uploads/admin/blogs/' . $blog->image_url) : ''; ?>" class="img-fluid" alt="Blog Image" loading="lazy" /></a></span>
            </div>
            <div class="blogDetails boxs">
                <span class="fontSize12 blogTiming boxs"><?php echo !empty($blog->added_date) ? date('M d, Y', strtotime($blog->added_date)) : ''; ?></span>
                <div class="bloginfo boxs">
                    <h4 class="blogHeading fontSize22 boxs"><a class="boxs" href="<?php echo route('front/blog_details',['slug' => $blog->slug]); ?>"><?php echo !empty($blog->blog_title) ? $blog->blog_title : ''; ?></a></h4>
                    <p class="blogDescription fontSize16 boxs"><?php echo !empty($blog->blog_description) ? substr(strip_tags($blog->blog_description), 0, 235) . '...' : ''; ?></p>
                </div>
            </div>
        </div>
        <div class="blogContentBtm boxs">
            <!-- <span class="blogCategory fontSize14 boxs">#DESIGN</span> -->
            <span class="readmoreBlog linkDesign fontSize14 boxs"><a class="" href="<?php echo route('front/blog_details',['slug' => $blog->slug]); ?>">READ MORE</a></span>
        </div>
    </div>
</div>