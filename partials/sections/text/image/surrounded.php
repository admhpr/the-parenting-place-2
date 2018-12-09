<section class="card content-3 text-center">
    <div class="container">
        <h2><?php echo esc_html_e( $content['title'] ); ?></h2>
        <p class="lead mb-5 constrain-width"><?php echo esc_html_e( $content['main_text'] ); ?></p>
        <div class="row justify-center">
            <div class="col-md-3 text-center text-md-right" >
                <div class="col col-feature">
                    <em class="fa fa-2x fa-paint-brush"></em>
                    <h4>Clean Design</h4>
                    <p><?php echo esc_html_e( $content['top_left'] ); ?></p>
                </div>
                <div class="col col-feature">
                    <em class="fa fa-2x fa-desktop"></em>
                    <h4>Clean Design</h4>
                    <p><?php echo esc_html_e( $content['top_right'] ); ?></p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img class="mb-4 img-fluid" src="https://images.unsplash.com/photo-1531915911824-79a6471b9827?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5adaa5cbe64858f5c06e4df2db2e4815&auto=format&fit=crop&w=500&q=60" >
            </div>
            <div class="col-md-3 text-center text-md-left" >
                <div class="col col-feature">
                    <em class="fa fa-2x fa-code"></em>
                    <h4>Bootstrap 4</h4>
                    <p><?php echo esc_html_e( $content['bottom_left'] ); ?></p>
                </div>
                <div class="col col-feature">
                    <em class="fa fa-2x fa-pencil"></em>
                    <h4>Easy to Edit</h4>
                    <p><?php echo esc_html_e( $content['bottom_right'] ); ?></p>
                </div>
            </div>	
        </div>
    </div>
</section>