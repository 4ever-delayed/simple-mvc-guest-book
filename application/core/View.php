<?php

class View
{
	public function render($content_view, $template_view, $data = null) : void
	{
		include 'application/views/'.$template_view;
	}

	public function renderPartial($content_view, $data = null) : void
    {
        include 'application/views/'.$content_view;
    }

}
