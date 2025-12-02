import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class SettingsPage extends StatelessWidget {
  const SettingsPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: AppDrawer(),
      appBar: AppBar(title: Text("Halaman Settings")),
      body: Center(child: Text("Ini adalah halaman settings")),
    );
  }
}