#SMS autoresponder with CDYNE SMS Notify! api#

##What's this?##
 
We [learned](http://www.feverbee.com/2012/04/when-data-disproves-community-building-myths.html) from the guys at FeverBee there are a few key things in early community development. One of those is the swift - and quality - answer to their forum posts. We can't exepct from our key members to be online all the time, and they can't (or won't) use neither web nor email on their phones... So we came up with the idea of a SMS autoresponder. Soon we found CDYNE's SMS Notify! API. 

##Install and usage##

1. Get your license key from [CDYNE](http://www.cdyne.com/).
2. Copy the files to your webroot(s) and fill the config.php.
3. Include sms_notify.php where you want to use it
4. Call the function `sms_notify('phone-number','event')` to send the texts. 

For more information see the code.

##Plans##

- Make it 'safe'. Right now anybody could use it and spam our key users... We should use some security measures to avoid this.
- Make the texts take extra params. Something like: `'event' => 'hey, there was an event at $1'` where we can replace the $n with the nth extra param.

##Copyright##

Copyright 2012, Zoltan Lengyel.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
