<?php
print '<div class="table-responsive">';
print '<table>';

// FIXME : Dirty Hacks
if (!isset($_GET['sort'])) 
{
	$_GET['sort'] = '';
}
if (!isset($showSpecial)) 
{
	$showSpecial = false;
}
if (!isset($hide_th_links)) 
{
	$hide_th_links = false;
}

if (strtolower($current_page) == "search")
{
	print '<thead>';
	print '<th class="aircraft_thumbnail"></th>';
	if ($_GET['sort'] == "airline_name_asc")
	{
		print '<th class="logo"><a href="'.$page_url.'&sort=airline_name_desc" class="active">Airline</a> <i class="fa fa-caret-up"></i></th>';
	} else if ($_GET['sort'] == "airline_name_desc")
	{
		 print '<th class="logo"><a href="'.$page_url.'&sort=airline_name_asc" class="active">Airline</a> <i class="fa fa-caret-down"></i></th>';
	} else {
		print '<th class="logo"><a href="'.$page_url.'&sort=airline_name_asc">Airline</a> <i class="fa fa-sort small"></i></th>';
	}
	if ($_GET['sort'] == "ident_asc")
	{
		print '<th class="ident"><a href="'.$page_url.'&sort=ident_desc" class="active">Ident</a> <i class="fa fa-caret-up"></i></th>';
	} else if ($_GET['sort'] == "ident_desc")
	{
		print '<th class="ident"><a href="'.$page_url.'&sort=ident_asc" class="active">Ident</a> <i class="fa fa-caret-down"></i></th>';
	} else {
		print '<th class="ident"><a href="'.$page_url.'&sort=ident_asc">Ident</a> <i class="fa fa-sort small"></i></th>';
	}
	if ($_GET['sort'] == "aircraft_asc")
	{
		print '<th class="type"><a href="'.$page_url.'&sort=aircraft_desc" class="active">Aircraft</a> <i class="fa fa-caret-up"></i></th>';
	} else if ($_GET['sort'] == "aircraft_desc")
	{
		print '<th class="type"><a href="'.$page_url.'&sort=aircraft_asc" class="active">Aircraft</a> <i class="fa fa-caret-down"></i></th>';
	} else {
		print '<th class="type"><a href="'.$page_url.'&sort=aircraft_asc">Aircraft</a> <i class="fa fa-sort small"></i></th>';
	}
	if ($_GET['sort'] == "airport_departure_asc")
	{
		print '<th class="departure"><a href="'.$page_url.'&sort=airport_departure_desc" class="active"><span class="nomobile">Coming from</span><span class="mobile">From</span></a> <i class="fa fa-caret-up"></i></th>';
	} else if ($_GET['sort'] == "airport_departure_desc")
	{
		print '<th class="departure"><a href="'.$page_url.'&sort=airport_departure_asc" class="active"><span class="nomobile">Coming from</span><span class="mobile">From</span></a> <i class="fa fa-caret-down"></i></th>';
	} else {
		print '<th class="departure"><a href="'.$page_url.'&sort=airport_departure_asc"><span class="nomobile">Coming from</span><span class="mobile">From</span></a> <i class="fa fa-sort small"></i></th>';
	}
	if ($_GET['sort'] == "airport_arrival_asc")
	{
		print '<th class="arrival"><a href="'.$page_url.'&sort=airport_arrival_desc" class="active"><span class="nomobile">Flying to</span><span class="mobile">To</span></a> <i class="fa fa-caret-up"></i></th>';
	} else if ($_GET['sort'] == "airport_arrival_desc")
	{
		print '<th class="arrival"><a href="'.$page_url.'&sort=airport_arrival_asc" class="active"><span class="nomobile">Flying to</span><span class="mobile">To</span></a> <i class="fa fa-caret-down"></i></th>';
	} else {
		print '<th class="arrival"><a href="'.$page_url.'&sort=airport_arrival_asc"><span class="nomobile">Flying to</span><span class="mobile">To</span></a> <i class="fa fa-sort small"></i></th>';
	}
	if ($_GET['sort'] == "date_asc")
	{
		print '<th class="time"><a href="'.$page_url.'&sort=date_desc" class="active">Date</a> <i class="fa fa-caret-up"></i></th>';
	} else if ($_GET['sort'] == "date_desc")
	{
		print '<th class="time"><a href="'.$page_url.'&sort=date_asc" class="active">Date</a> <i class="fa fa-caret-down"></i></th>';
	} else {
		print '<th class="time"><a href="'.$page_url.'&sort=date_asc">Date</a> <i class="fa fa-sort small"></i></th>';
	}
	print '</thead>';
} else {

	if ($hide_th_links == true){
		print '<thead>';
		print '<th class="aircraft_thumbnail"></th>';
		if ($_GET['sort'] == "airline_name_asc")
		{
			print '<th class="logo"Airline</th>';
		} else if ($_GET['sort'] == "airline_name_desc")
		{
			print '<th class="logo">Airline</th>';
		} else {
			print '<th class="logo">Airline</th>';
		}
		if ($_GET['sort'] == "ident_asc")
		{
			print '<th class="ident">Ident</th>';
		} else if ($_GET['sort'] == "ident_desc")
		{
			print '<th class="ident">Ident</th>';
		} else {
			print '<th class="ident">Ident</th>';
		}
		if ($_GET['sort'] == "aircraft_asc")
		{
			print '<th class="type">Aircraft</th>';
		} else if ($_GET['sort'] == "aircraft_desc")
		{
			print '<th class="type">Aircraft</th>';
		} else {
			print '<th class="type">Aircraft</th>';
		}
		if ($_GET['sort'] == "airport_departure_asc")
		{
			print '<th class="departure"><span class="nomobile">Coming from</span><span class="mobile">From</span></th>';
		} else if ($_GET['sort'] == "airport_departure_desc")
		{
			print '<th class="departure"><span class="nomobile">Coming from</span><span class="mobile">From</span></th>';
		} else {
			print '<th class="departure"><span class="nomobile">Coming from</span><span class="mobile">From</span></th>';
		}
		if ($_GET['sort'] == "airport_arrival_asc")
		{
			print '<th class="arrival"><span class="nomobile">Flying to</span><span class="mobile">To</span></th>';
		} else if ($_GET['sort'] == "airport_arrival_desc")
		{
			print '<th class="arrival"><span class="nomobile">Flying to</span><span class="mobile">To</span></th>';
		} else {
			print '<th class="arrival"><span class="nomobile">Flying to</span><span class="mobile">To</span></th>';
		}
		if (strtolower($current_page) == "date")
		{
			if ($_GET['sort'] == "date_asc")
			{
				print '<th class="time">Time</th>';
			} else if ($_GET['sort'] == "date_desc")
			{
				print '<th class="time">Time</th>';
			} else {
				print '<th class="time">Time</th>';
			}
		} else {
			if ($_GET['sort'] == "date_asc")
			{
				print '<th class="time">Date</th>';
			} else if ($_GET['sort'] == "date_desc")
			{
				print '<th class="time">Date</th>';
			} else {
				print '<th class="time">Date</th>';
			}
		}
		print '</thead>';
	} else {
		print '<thead>';
		print '<th class="aircraft_thumbnail"></th>';
		if ($_GET['sort'] == "airline_name_asc")
		{
			print '<th class="logo"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airline_name_desc" class="active">Airline</a> <i class="fa fa-caret-up"></i></th>';
		} else if ($_GET['sort'] == "airline_name_desc")
		{
			print '<th class="logo"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airline_name_asc" class="active">Airline</a> <i class="fa fa-caret-down"></i></th>';
		} else {
			print '<th class="logo"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airline_name_asc">Airline</a> <i class="fa fa-sort small"></i></th>';
		}
		if ($_GET['sort'] == "ident_asc")
		{
			print '<th class="ident"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/ident_desc" class="active">Ident</a> <i class="fa fa-caret-up"></i></th>';
		} else if ($_GET['sort'] == "ident_desc")
		{
			print '<th class="ident"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/ident_asc" class="active">Ident</a> <i class="fa fa-caret-down"></i></th>';
		} else {
			print '<th class="ident"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/ident_asc">Ident</a> <i class="fa fa-sort small"></i></th>';
		}
		if ($_GET['sort'] == "aircraft_asc")
		{
			print '<th class="type"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/aircraft_desc" class="active">Aircraft</a> <i class="fa fa-caret-up"></i></th>';
		} else if ($_GET['sort'] == "aircraft_desc")
		{
			print '<th class="type"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/aircraft_asc" class="active">Aircraft</a> <i class="fa fa-caret-down"></i></th>';
		} else {
			print '<th class="type"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/aircraft_asc">Aircraft</a> <i class="fa fa-sort small"></i></th>';
		}
		if ($_GET['sort'] == "airport_departure_asc")
		{
			print '<th class="departure"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airport_departure_desc" class="active"><span class="nomobile">Coming from</span><span class="mobile">From</span></a> <i class="fa fa-caret-up"></i></th>';
		} else if ($_GET['sort'] == "airport_departure_desc")
		{
			print '<th class="departure"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airport_departure_asc" class="active"><span class="nomobile">Coming from</span><span class="mobile">From</span></a> <i class="fa fa-caret-down"></i></th>';
		} else {
			print '<th class="departure"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airport_departure_asc"><span class="nomobile">Coming from</span><span class="mobile">From</span></a> <i class="fa fa-sort small"></i></th>';
		}
		if ($_GET['sort'] == "airport_arrival_asc")
		{
			print '<th class="arrival"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airport_arrival_desc" class="active"><span class="nomobile">Flying to</span><span class="mobile">To</span></a> <i class="fa fa-caret-up"></i></th>';
		} else if ($_GET['sort'] == "airport_arrival_desc")
		{
			print '<th class="arrival"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airport_arrival_asc" class="active"><span class="nomobile">Flying to</span><span class="mobile">To</span></a> <i class="fa fa-caret-down"></i></th>';
		} else {
			print '<th class="arrival"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/airport_arrival_asc"><span class="nomobile">Flying to</span><span class="mobile">To</span></a> <i class="fa fa-sort small"></i></th>';
		}
		print '<th class="routestop"><span class="nomobile">Route stop</span><span class="mobile">Stop</span></a></th>';
		if (strtolower($current_page) == "date")
		{
			if ($_GET['sort'] == "date_asc")
			{
				print '<th class="time"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/date_desc" class="active">Time</a> <i class="fa fa-caret-up"></i></th>';
			} else if ($_GET['sort'] == "date_desc")
			{
				print '<th class="time"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/date_asc" class="active">Time</a> <i class="fa fa-caret-down"></i></th>';
			} else {
				print '<th class="time"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/date_asc">Time</a> <i class="fa fa-sort small"></i></th>';
			}
		} else {
			if ($_GET['sort'] == "date_asc")
			{
				print '<th class="time"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/date_desc" class="active">Date</a> <i class="fa fa-caret-up"></i></th>';
			} else if ($_GET['sort'] == "date_desc")
			{
				print '<th class="time"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/date_asc" class="active">Date</a> <i class="fa fa-caret-down"></i></th>';
			} else {
				print '<th class="time"><a href="'.$page_url.'/'.$limit_start.','.$limit_end.'/date_asc">Date</a> <i class="fa fa-sort small"></i></th>';
			}
		}
		print '</thead>';
	}
}

print '<tbody>'."\n";
foreach($spotter_array as $spotter_item)
{
	if (isset($globalTimezone))
	{
		date_default_timezone_set($globalTimezone);
	} else date_default_timezone_set('UTC');
	if ($showSpecial == true)
	{
		print '<tr class="special">'."\n";
		print '<td colspan="7"><h4>'.$spotter_item['registration'].' - '.$spotter_item['highlight'].'</h4></td>'."\n";
		print '</tr>'."\n";
	}
	print '<tr>'."\n";
	if ($spotter_item['image_thumbnail'] != "")
	{
		print '<td class="aircraft_thumbnail">'."\n";
		//print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$spotter_item['image_thumbnail'].'" alt="Click to see more information about this flight" title="Click to see more information about this flight" width="100px" /></a>';
		if (!isset($spotter_item['airline_name']) && isset($spotter_item['aircraft_name'])) {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$spotter_item['image_thumbnail'].'" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: '.$spotter_item['aircraft_name'].' ('.$spotter_item['aircraft_type'].')<br />Airline: Not available" data-html="true" width="100px" /></a>'."\n";
		} elseif (!isset($spotter_item['aircraft_name']) && isset($spotter_item['airline_name'])) {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$spotter_item['image_thumbnail'].'" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: ('.$spotter_item['aircraft_type'].')<br />Airline: '.$spotter_item['airline_name'].'" data-html="true" width="100px" /></a>'."\n";
		} elseif (!isset($spotter_item['aircraft_name']) && !isset($spotter_item['airline_name'])) {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$spotter_item['image_thumbnail'].'" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: ('.$spotter_item['aircraft_type'].')<br />Airline: Not available" data-html="true" width="100px" /></a>'."\n";
		} else {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$spotter_item['image_thumbnail'].'" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: '.$spotter_item['aircraft_name'].' ('.$spotter_item['aircraft_type'].')<br />Airline: '.$spotter_item['airline_name'].'" data-html="true" width="100px" /></a>'."\n";
		}
		print '</td>'."\n";
	} else {
		print '<td class="aircraft_thumbnail">'."\n";
   //   	 	print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$globalURL.'/images/placeholder_thumb.png" alt="Click to see more information about this flight" title="Click to see more information about this flight" width="100px" /></a>';
	//}
		if (!isset($spotter_item['airline_name']) && !isset($spotter_item['aircraft_name'])) {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$globalURL.'/images/placeholder_thumb.png" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: Not available ('.$spotter_item['aircraft_type'].')<br />Airline: Not available" data-html="true" width="100px" /></a>'."\n";
		} elseif (!isset($spotter_item['aircraft_name'])) {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$globalURL.'/images/placeholder_thumb.png" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: Not available ('.$spotter_item['aircraft_type'].')<br />Airline: '.$spotter_item['airline_name'].'" data-html="true" width="100px" /></a>'."\n";
		} elseif (!isset($spotter_item['airline_name'])) {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$globalURL.'/images/placeholder_thumb.png" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - Not available" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: '.$spotter_item['aircraft_name'].' ('.$spotter_item['aircraft_type'].')<br />Airline: Not available" data-html="true" width="100px" /></a>'."\n";
		} else {
			print '<a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'"><img src="'.$globalURL.'/images/placeholder_thumb.png" data-toggle="popover" title="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" alt="'.$spotter_item['registration'].' - '.$spotter_item['aircraft_type'].' - '.$spotter_item['airline_name'].'" data-content="Registration: '.$spotter_item['registration'].'<br />Aircraft: '.$spotter_item['aircraft_name'].' ('.$spotter_item['aircraft_type'].')<br />Airline: '.$spotter_item['airline_name'].'" data-html="true" width="100px" /></a>'."\n";
		}
		print '</td>'."\n";
	}
	if (@getimagesize('images/airlines/'.$spotter_item['airline_icao'].'.png') || @getimagesize($globalURL.'/images/airlines/'.$spotter_item['airline_icao'].'.png'))
	{
		print '<td class="logo">'."\n";
		print '<a href="'.$globalURL.'/airline/'.$spotter_item['airline_icao'].'"><img src="'.$globalURL.'/images/airlines/'.$spotter_item['airline_icao'].'.png" alt="Click to see airline information" title="Click to see airline information" /></a>'."\n";
		print '</td>'."\n";
	} else {
		print '<td class="logo-no-image">'."\n";
		if (isset($spotter_item['airline_icao']))
		{
			print '<a href="'.$globalURL.'/airline/'.$spotter_item['airline_icao'].'">'.$spotter_item['airline_name'].'</a>'."\n";
		} else {
			print '<a href="'.$globalURL.'/airline/NA">Not Available</a>'."\n";
		}
		print '</td>'."\n";
	}
	// Aircraft ident
	print '<td class="ident">'."\n";
	if ($spotter_item['ident'] != "")
	{
		print '<a href="'.$globalURL.'/ident/'.$spotter_item['ident'].'">'.$spotter_item['ident'].'</a>'."\n";
	} else {
		print 'N/A'."\n";
	}
	print '</td>'."\n";
	// Aircraft type
	print '<td class="type">'."\n";
	if (!isset($spotter_item['aircraft_name'])) {
		print '<span class="nomobile"><a href="'.$globalURL.'/aircraft/'.$spotter_item['aircraft_type'].'">Not available</a></span>'."\n";
	} else {
		print '<span class="nomobile"><a href="'.$globalURL.'/aircraft/'.$spotter_item['aircraft_type'].'">'.$spotter_item['aircraft_name'].'</a></span>'."\n";
	}
	print '<span class="mobile"><a href="'.$globalURL.'/aircraft/'.$spotter_item['aircraft_type'].'">'.$spotter_item['aircraft_type'].'</a></span>'."\n";
	print '</td>'."\n";
	// Departure Airport
	print '<td class="departure_airport">'."\n";
	if (!isset($spotter_item['departure_airport']) || !isset($spotter_item['departure_airport_city'])) {
		print '<span class="nomobile">Not available</span>'."\n";
		print '<span class="mobile">Not available</span>'."\n";
	} else {
		print '<span class="nomobile"><a href="'.$globalURL.'/airport/'.$spotter_item['departure_airport'].'">'.$spotter_item['departure_airport_city'].', '.$spotter_item['departure_airport_country'].' ('.$spotter_item['departure_airport'].')</a></span>'."\n";
		print '<span class="mobile"><a href="'.$globalURL.'/airport/'.$spotter_item['departure_airport'].'">'.$spotter_item['departure_airport'].'</a></span>'."\n";
	}
	if (isset($spotter_item['departure_airport_time'])) {
		print '<br /><span class="airport_time">'.$spotter_item['departure_airport_time'].'</span>'."\n";
	}
	print '</td>'."\n";
	// Arrival Airport
	print '<td class="arrival_airport">'."\n";
	if (!isset($spotter_item['arrival_airport']) || !isset($spotter_item['arrival_airport_city'])) {
		print '<span class="nomobile">Not available</span>'."\n";
		print '<span class="mobile">Not available</span>'."\n";
	} else {
		print '<span class="nomobile"><a href="'.$globalURL.'/airport/'.$spotter_item['arrival_airport'].'">'.$spotter_item['arrival_airport_city'].', '.$spotter_item['arrival_airport_country'].' ('.$spotter_item['arrival_airport'].')</a></span>'."\n";
		print '<span class="mobile"><a href="'.$globalURL.'/airport/'.$spotter_item['arrival_airport'].'">'.$spotter_item['arrival_airport'].'</a></span>'."\n";
	}
	if (isset($spotter_item['arrival_airport_time'])) {
		print '<br /><span class="airport_time">'.$spotter_item['arrival_airport_time'].'</span>'."\n";
	}
	print '</td>'."\n";
	// Route stop
	print '<td class="route_stop">'."\n";
	if (!isset($spotter_item['route_stop']) || $spotter_item['route_stop'] == '') {
		print '<span class="nomobile">-</span>'."\n";
		print '<span class="mobile">-</span>'."\n";
	} else {
		foreach ($spotter_item['route_stop_details'] as $rst) {
			print '<span class="nomobile"><a href="'.$globalURL.'/airport/'.$rst['airport_icao'].'">'.$rst['airport_city'].', '.$rst['airport_country'].' ('.$rst['airport_icao'].')</a></span>'."\n";
			print '<span class="mobile"><a href="'.$globalURL.'/airport/'.$rst['airport_icao'].'">'.$rst['airport_icao'].'</a></span><br />'."\n";
		}
	}
	print '</td>'."\n";
	// Date
	if (strtolower($current_page) == "date")
	{
		print '<td class="time">'."\n";
		print '<span class="nomobile"><a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'">'.date("g:i a T", strtotime($spotter_item['date_iso_8601'])).'</a></span>'."\n";
		print '<span class="mobile"><a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'">'.date("g:i a T", strtotime($spotter_item['date_iso_8601'])).'</a></span>'."\n";
		print '</td>'."\n";
	} else if (strtolower($current_page) == "index")
	{
		print '<td class="time">'."\n";
		print '<span class="nomobile"><a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'">'.$spotter_item['date'].'</a></span>'."\n";
		print '<span class="mobile"><a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'">'.$spotter_item['date'].'</a></span>'."\n";
		print '</td>'."\n";
	} else {
		print '<td class="date">'."\n";
		print '<span class="nomobile"><a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'">'.date("r", $spotter_item['date_unix']).'</a></span>'."\n";
		print '<span class="mobile"><a href="'.$globalURL.'/flightid/'.$spotter_item['spotter_id'].'">'.date("j/n/Y g:i a", strtotime($spotter_item['date_iso_8601'])).'</a></span>'."\n";
		print '</td>'."\n";
	}
	print '</tr>'."\n";
}
print '<tbody>'."\n";
print '</table>'."\n";
print '</div>'."\n";
?>