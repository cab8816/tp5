<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\xampp\htdocs\tp5\public/../application/index\view\ziapu\index.htm";i:1578146158;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Tree View</title>
    <link href="/tp5/public/static/index/css/bootstrap.css" rel="stylesheet">
	<link href="/tp5/public/static/index/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/tp5/public/static/index/css/bootstrap-treeview.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
    	<h1>Bootstrap Tree View</h1>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <h2>Default</h2>
          <div id="treeview1" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Collapsed</h2>
          <div id="treeview2" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Expanded</h2>
          <div id="treeview3" class=""></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h2>Blue Theme</h2>
          <div id="treeview4" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Custom Icons</h2>
          <div id="treeview5" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Tags as Badges</h2>
          <div id="treeview6" class=""></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h2>No Border</h2>
          <div id="treeview7" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Colourful</h2>
          <div id="treeview8" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Node Overrides</h2>
          <div id="treeview9" class=""></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h2>Link enabled, or</h2>
          <div id="treeview10" class=""></div>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">

        </div>
      </div>
      <div class="row">
        <hr>
        <h2>Searchable Tree</h2>
        <div class="col-sm-4">
          <h2>Input</h2>
          <!-- <form> -->
            <div class="form-group">
              <label for="input-search" class="sr-only">Search Tree:</label>
              <input type="input" class="form-control" id="input-search" placeholder="Type to search..." value="">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" class="checkbox" id="chk-ignore-case" value="false">
                Ignore Case
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" class="checkbox" id="chk-exact-match" value="false">
                Exact Match
              </label>
            </div>
            <button type="button" class="btn btn-success" id="btn-search">Search</button>
            <button type="button" class="btn btn-default" id="btn-clear-search">Clear</button>
          <!-- </form> -->
        </div>
        <div class="col-sm-4">
          <h2>Tree</h2>
          <div id="treeview-searchable" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Results</h2>
          <div id="search-output"></div>
        </div>
      </div>
      <div class="row">
        <hr>
        <h2>Selectable Tree</h2>
        <div class="col-sm-4">
          <h2>Input</h2>
          <div class="form-group">
            <label for="input-select-node" class="sr-only">Search Tree:</label>
            <input type="input" class="form-control" id="input-select-node" placeholder="Identify node..." value="Parent 1">
          </div>
          <div class="form-group">
              <button type="button" class="btn btn-success select-node" id="btn-select-node">Select Node</button>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-danger select-node" id="btn-unselect-node">Unselect Node</button>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-primary select-node" id="btn-toggle-selected">Toggle Node</button>
          </div>
        </div>
        <div class="col-sm-4">
          <h2>Tree</h2>
          <div id="treeview-selectable" class=""></div>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
      <div class="row">
        <hr>
        <h2>Expandible Tree</h2>
        <div class="col-sm-4">
          <h2>Input</h2>
          <div class="form-group">
            <label for="input-expand-node" class="sr-only">Search Tree:</label>
            <input type="input" class="form-control" id="input-expand-node" placeholder="Identify node..." value="Parent 1">
          </div>
          <div class="form-group row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-success expand-node" id="btn-expand-node">Expand Node</button>
            </div>
            <div class="col-sm-6">
              <select class="form-control" id="select-expand-node-levels">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-danger expand-node" id="btn-collapse-node">Collapse Node</button>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-primary expand-node" id="btn-toggle-expanded">Toggle Node</button>
          </div>
          <hr>
          <div class="form-group row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-success" id="btn-expand-all">Expand All</button>
            </div>
            <div class="col-sm-6">
              <select class="form-control" id="select-expand-all-levels">
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <button type="button" class="btn btn-danger" id="btn-collapse-all">Collapse All</button>
        </div>
        <div class="col-sm-4">
          <h2>Tree</h2>
          <div id="treeview-expandible" class=""></div>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
      <div class="row">
        <hr>
        <h2>Events</h2>
        <div class="col-sm-4">
          <h2>Input</h2>
          <div id="treeview-events" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2>Output</h2>
          <div id="event-output"></div>
        </div>
        <div class="col-sm-4">
          <!-- <h2>Output</h2>
          <div id="event_output"></div> -->
        </div>
      </div>
      <div class="row">
        <hr>
        <h2>Data</h2>
        <div class="col-sm-4">
          <h2>JSON Data</h2>
          <div id="treeview12" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2></h2>
          <div id="treeview13" class=""></div>
        </div>
        <div class="col-sm-4">
          <h2></h2>
          <div id="treeview14"></div>
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <br/>
    </div>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
  	<script src="js/bootstrap-treeview.js"></script>
  	<script type="text/javascript">

  		$(function() {

        var defaultData = [
          {
            text: 'Parent 1',
            href: '#parent1',
            tags: ['4'],
            nodes: [
              {
                text: 'Child 1',
                href: '#child1',
                tags: ['2'],
                nodes: [
                  {
                    text: 'Grandchild 1',
                    href: '#grandchild1',
                    tags: ['0']
                  },
                  {
                    text: 'Grandchild 2',
                    href: '#grandchild2',
                    tags: ['0']
                  }
                ]
              },
              {
                text: 'Child 2',
                href: '#child2',
                tags: ['0']
              }
            ]
          },
          {
            text: 'Parent 2',
            href: '#parent2',
            tags: ['0']
          },
          {
            text: 'Parent 3',
            href: '#parent3',
             tags: ['0']
          },
          {
            text: 'Parent 4',
            href: '#parent4',
            tags: ['0']
          },
          {
            text: 'Parent 5',
            href: '#parent5'  ,
            tags: ['0']
          }
        ];

        var alternateData = [
          {
            text: 'Parent 1',
            tags: ['2'],
            nodes: [
              {
                text: 'Child 1',
                tags: ['3'],
                nodes: [
                  {
                    text: 'Grandchild 1',
                    tags: ['6']
                  },
                  {
                    text: 'Grandchild 2',
                    tags: ['3']
                  }
                ]
              },
              {
                text: 'Child 2',
                tags: ['3']
              }
            ]
          },
          {
            text: 'Parent 2',
            tags: ['7']
          },
          {
            text: 'Parent 3',
            icon: 'glyphicon glyphicon-earphone',
            href: '#demo',
            tags: ['11']
          },
          {
            text: 'Parent 4',
            icon: 'glyphicon glyphicon-cloud-download',
            href: '/demo.html',
            tags: ['19'],
            selected: true
          },
          {
            text: 'Parent 5',
            icon: 'glyphicon glyphicon-certificate',
            color: 'pink',
            backColor: 'red',
            href: 'http://www.tesco.com',
            tags: ['available','0']
          }
        ];

        var json = '[' +
          '{' +
            '"text": "Parent 1",' +
            '"nodes": [' +
              '{' +
                '"text": "Child 1",' +
                '"nodes": [' +
                  '{' +
                    '"text": "Grandchild 1"' +
                  '},' +
                  '{' +
                    '"text": "Grandchild 2"' +
                  '}' +
                ']' +
              '},' +
              '{' +
                '"text": "Child 2"' +
              '}' +
            ']' +
          '},' +
          '{' +
            '"text": "Parent 2"' +
          '},' +
          '{' +
            '"text": "Parent 3"' +
          '},' +
          '{' +
            '"text": "Parent 4"' +
          '},' +
          '{' +
            '"text": "Parent 5"' +
          '}' +
        ']';


        $('#treeview1').treeview({
          data: defaultData
        });

        $('#treeview2').treeview({
          levels: 1,
          data: defaultData
        });

        $('#treeview3').treeview({
          levels: 99,//默认打开层数
          data: defaultData
        });

        $('#treeview4').treeview({

          color: "#428bca",
          data: defaultData
        });

        $('#treeview5').treeview({
          color: "#428bca",
          expandIcon: 'glyphicon glyphicon-chevron-right',
          collapseIcon: 'glyphicon glyphicon-chevron-down',
          nodeIcon: 'glyphicon glyphicon-bookmark',
          data: defaultData
        });

        $('#treeview6').treeview({
          color: "#428bca",
          expandIcon: "glyphicon glyphicon-stop",
          collapseIcon: "glyphicon glyphicon-unchecked",
          nodeIcon: "glyphicon glyphicon-user",
          showTags: true,
          data: defaultData
        });

        $('#treeview7').treeview({
          color: "#428bca",
          showBorder: false,
          data: defaultData
        });

        $('#treeview8').treeview({
          expandIcon: "glyphicon glyphicon-stop",
          collapseIcon: "glyphicon glyphicon-unchecked",
          nodeIcon: "glyphicon glyphicon-user",
          color: "yellow",
          backColor: "purple",
          onhoverColor: "orange",
          borderColor: "red",
          showBorder: false,
          showTags: true,
          highlightSelected: true,
          selectedColor: "yellow",
          selectedBackColor: "darkorange",
          data: defaultData
        });

        $('#treeview9').treeview({
          expandIcon: "glyphicon glyphicon-stop",//关闭图标
          collapseIcon: "glyphicon glyphicon-unchecked",//打开图标
          nodeIcon: "glyphicon glyphicon-user",//用户图标
          color: "yellow",//文字颜色
          backColor: "purple",//背景颜色
          onhoverColor: "orange",//鼠标经过显示颜色
          borderColor: "red",//边缘颜色
          showBorder: false,//显示边缘
          showTags: false,//是否显示结尾标签
          highlightSelected: true,//选中高光
          selectedColor: "blue",//选中文字颜色
          selectedBackColor: "darkorange",//选中背景颜色
          data: alternateData//数据
        });

        $('#treeview10').treeview({
          color: "#428bca",
          enableLinks: true,//链接生效
          data: defaultData
        });

        $('#treeview-events').treeview({
          data: defaultData,
          onNodeCollapsed: function(event, node) {
            $('#event-output').prepend('<p>' + node.text + ' was collapsed</p>');
          },
          onNodeExpanded: function (event, node) {
            $('#event-output').prepend('<p>' + node.text + ' was expanded</p>');
          },
          onNodeSelected: function(event, node) {
            $('#event-output').prepend('<p>' + node.text + ' was selected</p>');
          },
          onNodeUnselected: function (event, node) {
            $('#event-output').prepend('<p>' + node.text + ' was unselected</p>');
          }
        });



        var $searchableTree = $('#treeview-searchable').treeview({
          data: defaultData,
        });

        var search = function(e) {
          var pattern = $('#input-search').val();
          var options = {
            ignoreCase: $('#chk-ignore-case').is(':checked'),
            exactMatch: $('#chk-exact-match').is(':checked')
          };
          var results = $searchableTree.treeview('search', [ pattern, options ]);

          var output = '<p>' + results.length + ' matches found</p>';
          $.each(results, function (index, result) {
            output += '<p>- ' + result.text + '</p>';
          });
          $('#search-output').html(output);
        }

        $('#btn-search').on('click', search);
        $('#input-search').on('keyup', search);

        $('#btn-clear-search').on('click', function (e) {
          $searchableTree.treeview('clearSearch');
          $('#input-search').val('');
          $('#search-output').html('');
        });



        var $selectableTree = $('#treeview-selectable').treeview({
          data: defaultData
        });

        var findSelectableNode = function() {
          return $selectableTree.treeview('search', [ $('#input-select-node').val(), { ignoreCase: false, exactMatch: true } ]);
        };
        var selectableNode = findSelectableNode();

        // Select/unselect/toggle nodes
        $('#input-select-node').on('keyup', function (e) {
          selectableNode = findSelectableNode();
          $('.select-node').prop('disabled', !(selectableNode.length === 1));
        });

        $('#btn-select-node.select-node').on('click', function (e) {
          $selectableTree.treeview('selectNode', selectableNode[0]);
        });

        $('#btn-unselect-node.select-node').on('click', function (e) {
          $selectableTree.treeview('unselectNode', selectableNode[0]);
        });

        $('#btn-toggle-selected.select-node').on('click', function (e) {
          $selectableTree.treeview('toggleNodeSelected', selectableNode[0]);
        });



        var $expandibleTree = $('#treeview-expandible').treeview({
          data: defaultData
        });

        var findExpandibleNode = function() {
          return $expandibleTree.treeview('search', [ $('#input-expand-node').val(), { ignoreCase: false, exactMatch: true } ]);
        };
        var expandibleNode = findExpandibleNode();

        // Expand/collapse/toggle nodes
        $('#input-expand-node').on('keyup', function (e) {
          expandibleNode = findExpandibleNode();
          $('.expand-node').prop('disabled', !(expandibleNode.length === 1));
        });

        $('#btn-expand-node.expand-node').on('click', function (e) {
          var levels = $('#select-expand-node-levels').val();
          $expandibleTree.treeview('expandNode', [ expandibleNode[0], { levels: levels } ]);
        });

        $('#btn-collapse-node.expand-node').on('click', function (e) {
          $expandibleTree.treeview('collapseNode', expandibleNode[0]);
        });

        $('#btn-toggle-expanded.expand-node').on('click', function (e) {
          $expandibleTree.treeview('toggleNodeExpanded', expandibleNode[0]);
        });

        // Expand/collapse all
        $('#btn-expand-all').on('click', function (e) {
          var levels = $('#select-expand-all-levels').val();
          $expandibleTree.treeview('expandAll', { levels: levels });
        });

        $('#btn-collapse-all').on('click', function (e) {
          $expandibleTree.treeview('collapseAll');
        });



        var $tree = $('#treeview12').treeview({
          data: json
        });
  		});
  	</script>
  </body>
</html>
