
{literal}
    <style>
        .menu {
            z-index: 100;
        }

        .subDmenu {
            z-index: 100;
        }

        div.moduleTitle {
            height: 10px;
        }
    </style>
{/literal}



{sugar_getscript file="cache/include/javascript/sugar_grp_yui_widgets.js"}
{sugar_getscript file='include/javascript/dashlets.js'}

{$chartResources}
{$mySugarChartResources}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var activePage = {$activePage};
    var theme = '{$theme}';
    current_user_id = '{$current_user}';
    jsChartsArray = new Array();
    var moduleName = '{$module}';
    document.body.setAttribute("class", "yui-skin-sam");
    {literal}
    var mySugarLoader = new YAHOO.util.YUILoader({
        require: ["my_sugar", "sugar_charts"],
        // Bug #48940 Skin always must be blank
        skin: {
            base: 'blank',
            defaultSkin: ''
        },
        onSuccess: function () {
            initMySugar();
            initmySugarCharts();
            SUGAR.mySugar.maxCount =    {/literal}{$maxCount}{literal};
            SUGAR.mySugar.homepage_dd = new Array();
            var j = 0;

            {/literal}
            var dashletIds = {$dashletIds};

            {if !$lock_homepage}
            for (i in dashletIds) {ldelim}
                SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
                SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
                // Bug #47097 : Dashlets not displayed after moving them
                // add new property to save real id of dashlet, it needs to have ability reload dashlet by id
                SUGAR.mySugar.homepage_dd[j].dashletID = dashletIds[i];
                SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;
                SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
                j++;
                {rdelim}
            {if $hiddenCounter > 0}
            for (var wp = 0; wp <= {$hiddenCounter}; wp++) {ldelim}
                SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_' + activePage + '_hidden' + wp);
                {rdelim}
            {/if}
            YAHOO.util.DDM.mode = 1;
            {/if}
            {literal}
            SUGAR.mySugar.renderDashletsDialog();
            SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
            {/literal}
            {literal}
        }
    });
    mySugarLoader.addModule({
        name: "my_sugar",
        type: "js",
        fullpath: {/literal}"{sugar_getjspath file='include/MySugar/javascript/MySugar.js'}"{literal},
        varName: "initMySugar",
        requires: []
    });
    mySugarLoader.addModule({
        name: "sugar_charts",
        type: "js",
        fullpath: {/literal}"{sugar_getjspath file="include/SugarCharts/Jit/js/mySugarCharts.js"}"{literal},
        varName: "initmySugarCharts",
        requires: []
    });
    mySugarLoader.insert();
    {/literal}
</script>


<div class="clear"></div>
<div id="pageContainer" class="yui-skin-sam">
    <div id="pageNum_{$activePage}_div">
        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 5px;">
            <tr>
                <td>

                </td>

                <td rowspan="3">
                    {sugar_getimage name="blank.gif"  width='40' height='1' border='0'}
                </td>
                <td align='right'>
                    {if !$lock_homepage}<input id="add_dashlets" class="button" type="button" value="{$lblAddDashlets}"
                                               onclick="return SUGAR.mySugar.showDashletsDialog();"/>{/if}
                </td>
            </tr>
            <tr>
                <td width="100%">
                    <label id="select_year" for="year">Chọn năm:</label>
                    <select id="year"></select>
                    <canvas id="myChart" width="200" height="70"></canvas>
                    <input type="hidden" value="{$currentLanguage}" id="curent_languge">
                    <br>
                    <br>
                    <br>
                    <div id="qt_vn_vn" style="position: relative; width: 100%; height: 0; padding-top: 56.2225%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                        <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF18i7463w&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                        </iframe>
                    </div>
                    <div id="qt_en_us" style="position: relative; width: 100%; height: 0; padding-top: 56.2225%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                        <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF2Uu98uTU&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                        </iframe>
                    </div>
                </td>
            </tr>
            <tr>
                {counter assign=hiddenCounter start=0 print=false}
                {assign var='loopExecuted' value=false}
                {foreach from=$columns key=colNum item=data}
                    {if !$loopExecuted}
                        <td valign='top' width='100%'>
                            <ul class='noBullet' id='col_{$activePage}_{$colNum}'>
                                <li id='page_{$activePage}_hidden{$hiddenCounter}b'
                                    style='height: 5px; margin-top:12px;' class='noBullet'>&nbsp;&nbsp;&nbsp;
                                </li>
                                {foreach from=$data.dashlets key=id item=dashlet}
                                    <li class='noBullet' id='dashlet_{$id}'>
                                        <div id='dashlet_entire_{$id}' class='dashletPanel'>
                                            {$dashlet.script}
                                            {$dashlet.displayHeader}
                                            {$dashlet.display}
                                            {$dashlet.displayFooter}
                                        </div>
                                    </li>
                                {/foreach}
                                <li id='page_{$activePage}_hidden{$hiddenCounter}' style='height: 5px' class='noBullet'>
                                    &nbsp;&nbsp;&nbsp;
                                </li>
                            </ul>
                        </td>
                        {assign var='loopExecuted' value=true}
                    {/if}
                    {counter}
                {/foreach}
            </tr>
        </table>
    </div>
    {foreach from=$divPages key=divPageIndex item=divPageNum}
        <div id="pageNum_{$divPageNum}_div" style="display:none;">
        </div>
    {/foreach}
    <div id="dashletsDialog" style="display:none;">
        <div class="hd" id="dashletsDialogHeader"><a href="javascript:void(0)"
                                                     onClick="javascript:SUGAR.mySugar.closeDashletsDialog();">
                <div class="container-close">&nbsp;</div>
            </a>{$lblAdd}
        </div>
        <div class="bd" id="dashletsList">
            <form></form>
        </div>

    </div>
</div>
{literal}
    <script>

        var current_language =  $('#curent_languge').val();
        if(current_language == "vn_vn") {
            $('#qt_en_us').hide();
        } else if(current_language == "en_us") {
            $('#qt_vn_vn').hide();
        }

        function changeSelectYear() {
            var language = $('#curent_languge').val();
            $.ajax({
                type: "POST",
                url: "handleHome.php",
                data: {
                    type: "getDataChart",
                    year: $("#year").val(),
                    language: language,
                },
                success: function (data) {
                    debugger
                    data = JSON.parse(data);
                    $("#select_year").text(data.select_year);
                    var financialData = {
                        labels: [data.month.t1, data.month.t2, data.month.t3, data.month.t4, data.month.t5, data.month.t6, data.month.t7, data.month.t8, data.month.t9, data.month.t10, data.month.t11, data.month.t12],
                        datasets: [
                            {
                                label: data.income,
                                backgroundColor: "rgba(75, 192, 192, 0.2)",
                                borderColor: "rgba(75, 192, 192, 1)",
                                borderWidth: 1,
                                hoverBackgroundColor: "rgba(75, 192, 192, 0.4)",
                                hoverBorderColor: "rgba(75, 192, 192, 1)",
                                data: [data.receipt.t1, data.receipt.t2, data.receipt.t3, data.receipt.t4, data.receipt.t5, data.receipt.t6, data.receipt.t7, data.receipt.t8, data.receipt.t9, data.receipt.t10, data.receipt.t11, data.receipt.t12]
                            },
                            {
                                label: data.expense,
                                backgroundColor: "rgba(255, 99, 132, 0.2)",
                                borderColor: "rgba(255, 99, 132, 1)",
                                borderWidth: 1,
                                hoverBackgroundColor: "rgba(255, 99, 132, 0.4)",
                                hoverBorderColor: "rgba(255, 99, 132, 1)",
                                data: [data.payment.t1, data.payment.t2, data.payment.t3, data.payment.t4, data.payment.t5, data.payment.t6, data.payment.t7, data.payment.t8, data.payment.t9, data.payment.t10, data.payment.t11, data.payment.t12]
                            }
                        ]
                    };

                    var ctx = $("#myChart");
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: financialData,
                        options: {
                            plugins: {
                                title: {
                                    display: true,
                                    text: data.title,
                                    font: {
                                        size: 16
                                    }
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            });
        }

        var yearSelect = $("#year");
        var currentYear = new Date().getFullYear();
        for (var year = currentYear - 2; year <= currentYear; year++) {
            yearSelect.append($("<option>", {
                value: year,
                text: year
            }));
        }
        yearSelect.val(currentYear);
        changeSelectYear();
        yearSelect.on("change", function () {
            debugger
            var ctx = document.getElementById("myChart").getContext("2d");
            var existingChart = Chart.getChart(ctx);
            if (existingChart) {
                existingChart.destroy();
            }
            changeSelectYear();
        })
    </script>
{/literal}