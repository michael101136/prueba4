@extends('layoutFront')
@section('contenido')
<header id="page-header">
            	<h1 id="page-title">Pricing Tables</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            
            <hr>
            
            <!-- begin pricing table - style 2 -->
            <section>
                <h2>Pricing Table &ndash; Style 2</h2>
                
                <table class="gen-table pricing-table responsive">
                    <thead>
                        <tr>
                            <th class="empty-left-top">&nbsp;</th>
                            <th>
                                <span class="title">Basic</span>
                                <span class="price">
                                	<span>&#36;20</span>
                                    <sup>/month</sup>
                                </span> 
                            </th>
                            <th>
                                <span class="title">Standard</span>
                                <span class="price">
                                	<span>&#36;50</span>
                                    <sup>/month</sup>
                                </span>  
                            </th>
                            <th class="featured">
                            	<span class="title">Plus</span>
                                <span class="price">
                                	<span>&#36;100</span>
                                    <sup>/month</sup>
                                </span> 
                            </th>
                            <th>
                            	<span class="title">Pro</span>
                                <span class="price">
                                	<span>&#36;150</span>
                                    <sup>/month</sup>
                                </span> 
                            </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td class="empty-left-bottom">&nbsp;</td>
                            <td><a class="button black" href="#">Order Now</a></td>
                            <td><a class="button black" href="#">Order Now</a></td>
                            <td><a class="button" href="#">Order Now</a></td>
                            <td><a class="button black" href="#">Order Now</a></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>Users</th>
                            <td>5</td>
                            <td>20</td>
                            <td>60</td>
                            <td>120</td>
                        </tr>
                        <tr class="odd">
                            <th>Forms</th>
                            <td>10</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <th>Reports</th>
                            <td>20</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr class="odd">
                            <th>Entries / Month</th>
                            <td>500</td>
                            <td>3,000</td>
                            <td>15,000</td>
                            <td>100,000</td>
                        </tr>
                        <tr>
                            <th>SSL Encryption</th>
                            <td>&mdash;</td>
                            <td><span class="check">&nbsp;</span></td>
                            <td><span class="check">&nbsp;</span></td>
                            <td><span class="check">&nbsp;</span></td>
                        </tr>
                        <tr class="odd">
                            <th>Payment Integration</th>
                            <td>&mdash;</td>
                            <td><span class="check">&nbsp;</span></td>
                            <td><span class="check">&nbsp;</span></td>
                            <td><span class="check">&nbsp;</span></td>
                        </tr>
                        <tr class="row-last">
                            <th>Storage</th>
                            <td>3 GB</td>
                            <td>15 GB</td>
                            <td>40 GB</td>
                            <td>100 GB</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!-- end pricing table - style 2 -->
              	
      
               
@endsection