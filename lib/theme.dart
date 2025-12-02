import 'package:flutter/material.dart';

final ThemeData appTheme = ThemeData(
  primarySwatch: Colors.blue,
  scaffoldBackgroundColor: Colors.blue[50],
  appBarTheme: AppBarTheme(
    backgroundColor: Colors.blue[400],
    elevation: 0,
  ),
  drawerTheme: DrawerThemeData(
    backgroundColor: Colors.blue[100],
  ),
  textTheme: const TextTheme(
    bodyLarge: TextStyle(color: Colors.black87),
    bodyMedium: TextStyle(color: Colors.black54),
  ),
  listTileTheme: const ListTileThemeData(
    iconColor: Colors.blue,
  ),
  elevatedButtonTheme: ElevatedButtonThemeData(
    style: ElevatedButton.styleFrom(
      backgroundColor: Colors.blue[400],
      foregroundColor: Colors.white,
    ),
  ),
);
