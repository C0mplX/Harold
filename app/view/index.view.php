<div class="row">
	<div class="col-xs-12 text-center" id="content">
		
	</div>
</div>
<script type="text/jsx">
	var CommentBox = React.createClass({displayName: 'CommentBox',
	  render: function() {
	    return (
	      React.createElement('div', {className: "commentBox"},
	        "Hello, world! I am a CommentBox."
	      )
	    );
	  }
	});
	React.render(
	  React.createElement(CommentBox, null),
	  document.getElementById('content')
	);
	</script>