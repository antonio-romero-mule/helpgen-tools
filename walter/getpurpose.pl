my $page=join "", <>;

#$page =~ m/(<b>Purpose.*\>\s*)(.*?)(\<\/p>)/ms;
$page =~ m/(<b>Purpose[^\n\r]*\>\s*)(.*?)(\<\/p>)/ms;

$desc=$2;
$desc =~ s/^\s+|\s+$//g;
print "$desc";
